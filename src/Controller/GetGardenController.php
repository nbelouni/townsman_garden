<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Species;
use App\Entity\Plant;

use Symfony\Component\HttpClient\HttpClient;

use Sunra\PhpSimple\HtmlDomParser;

class GetGardenController extends AbstractController
{
	/**
	* @Route("/getGarden")
	*/
	public function getGarden()
	{
		$baseUrl = "https://garden.org";
		$client = HttpClient::create();
		$response = $client->request('GET', 'https://garden.org/plants/search/advanced.php?submit=Search%21&select%5B2%5D=&select%5B4%5D=&select%5B186%5D=&text%5B5%5D=&text%5B6%5D=&box_other%5B652%5D=&box_other%5B789%5D=&box_other%5B1651%5D=&box_other%5B790%5D=&box_other%5B41%5D=&box_other%5B42%5D=&box_other%5B43%5D=&box_other%5B728%5D=&text%5B291%5D=&text%5B290%5D=&box%5B334%5D%5B1630%5D=on&box_other%5B1635%5D=&box_other%5B77%5D=&box_other%5B81%5D=&box_other%5B82%5D=&box_other%5B83%5D=&box_other%5B84%5D=&box_other%5B85%5D=&box_other%5B90%5D=&box_other%5B648%5D=&box_other%5B1591%5D=&box_other%5B111%5D=&box_other%5B996%5D=&box_other%5B108%5D=&box_other%5B1669%5D=&box_other%5B1511%5D=&select%5B317%5D=&text%5B314%5D=&text%5B315%5D=&opt%5Bsortby%5D=popular');
		$searchDom = HtmlDomParser::str_get_html($response->getContent());

		foreach ($searchDom->find(".table-bordered td[!width] a") as $link)
		{
			$newUrl = $baseUrl . $link->href;

			$response = $client->request('GET', $newUrl);
			$dom = HtmlDomParser::str_get_html($response->getContent()); 

			$speciesProperties = $dom->find('.table-bordered');

			$species = new Species();
			$tmp = array();
			if (!strcmp($speciesProperties[0]->find("caption", 0)->plaintext, "Common names:"))
			{
				$commonName = null;
				foreach ($speciesProperties[0]->find('td[!width]') as $name)
				{
					if ($commonName)
						$commonName = $commonName . "," . $name->plaintext;
					else
						$commonName = $name->plaintext;
				}
				$tmp["common_names"] = $commonName;
				array_shift($speciesProperties);
			}
			else
			{
				$tmp["common_names"] = "No common names.";
			}

			if (!strcmp($speciesProperties[0]->find("caption", 0)->plaintext, "Botanical names:"))
			{
				$botanicalName = null;
				foreach ($speciesProperties[0]->find('td[!width] i') as $name)
				{
					if ($botanicalName)
						$botanicalName = $botanicalName . "," . $name->plaintext;
					else
						$botanicalName = $name->plaintext;
				}
				array_shift($speciesProperties);
				$tmp["botanical_names"] = $botanicalName;
			}
			else
			{
				$tmp["botanical_names"] = "No botanical names.";
			}

			if (strstr($speciesProperties[0]->find("caption", 0)->plaintext, "General Plant Information"))
			{
				foreach ($speciesProperties[0]->find('tr') as $row)
				{
					$value = $row->find('td');
					$field = str_replace(" ", "_", trim(strtolower($value[0]->plaintext), " :"));
					array_shift($value);

					$valuesEnum = null;
					foreach ($value as $name)
					{
						$valuesEnum = implode(' , ', $name->find("br")) . " OR " . $name->innertext;
//						if (strstr($name, "span"))
//						{
////							foreach($name->children() as $tmp)
////							{
////								if ($valuesEnum)
////									$valuesEnum = $valuesEnum . "- , -" . $tmp->plaintext;
////								else
////									$valuesEnum = $tmp->plaintext;
////							}
//						}
//						else
//						{
//							if ($valuesEnum)
//								$valuesEnum = $valuesEnum . "- , -" . $name->plaintext;
//							else
//								$valuesEnum = $name;//->plaintext;
//						}
					}

					$tmp[$field] = $valuesEnum;
//					$value = trim($row->find("td")[1]->plaintext);
//					if (is_array($value))
//						print(implode(" , ", $value));
//					else
//						$value = $species->enumToInt($field, $value);
//					$tmp[$field] = $species->enumToInt($field, $value);
				}
	//			array_shift($speciesProperties);
			}
			else
			{
				print("No general plant information.");
			}
			$tmp["url"] = $newUrl;

			return $this->render("getGarden.html.twig", [
			"infos" => $tmp]);
//			$species->setName(strstr($dom->find('h1')[0]->plaintext, "in the ", true));


		}
		return new Response("couocu");
	}

	/**
	* @Route("/getOoreka")
	*/
	public function getOoreka()
	{ 
//		$entityManager = $this->getDoctrine()->getManager();
		$baseUrl = "https://jardinage.ooreka.fr";
		$searchUrl = "/plante/rechercheAlpha/";
		$letterUrl = 97; // convert after

		$client = HttpClient::create();
		$url = null;

		while ($letterUrl <= 122)
		{
			$response = $client->request('GET', $baseUrl . $searchUrl . chr($letterUrl));

			$searchDom = HtmlDomParser::str_get_html($response->getContent());
			
			$resultPages = ceil(preg_split("/[^\d]+/", $searchDom->find('._nbrPlants')[0]->plaintext)[1] / 20);
			$resultsPlants = $searchDom->find("#plant-search-result .info_plante .titre_liste_plante");

			for ($i = 0; $i < $resultPages; $i++)
			{
				if ($i > 0)
				{
					$pageSearchUrl = $i + 1; // implicit value "1"
					$tmp = $baseUrl . $searchUrl . chr($letterUrl) . "/" . $pageSearchUrl;
					$response = $client->request('GET', $baseUrl . $searchUrl . chr($letterUrl) . "/" . $pageSearchUrl);
					
					$searchDom = HtmlDomParser::str_get_html($response->getContent());
					
					$resultsPlants = $searchDom->find("#plant-search-result .info_plante .titre_liste_plante");
				}
				foreach ($resultsPlants as $tmp)
				{
					$url = $baseUrl . $tmp->href;
					//parser url ici
					/*
						$real_height;
						$real_width;
						$vegetation;
						$planting;
						$flowering;
						$harvest;
						$pruning;
						$url;
						$anti_insect;
					 */
					$response = $client->request('GET', $url);
					
					$searchDom = HtmlDomParser::str_get_html($response->getContent());
					
					$result = $searchDom->find("#resume_plante ul");
					$plant = new Plant();
					foreach ($result as $infoBlock)
					{
						$infotext = $infoBlock->find("li");
						if (!$plant->getCommonNames())
							$plant->setCommonNames($this->findPData($infotext, "Nom(s) commun(s)"));
						if (!$plant->getBotanicalNames())
							$plant->setBotanicalNames($this->findPData($infotext, "Nom(s) latin(s)"));
						if (!$plant->getUrl())
							$plant->setUrl($url);
						if (!$plant->getFamily())
							$plant->setFamily($this->findPData($infotext, "Famille"));
						if (!$plant->getType())
							// cut string
							$plant->setType($this->findPData($infotext, "Type(s) de plante"));
							// parse HTMLatt
						if (!$plant->getFlowerColors())
							$plant->setFlowerColors($this->findPData($infotext, "Couleur des fleurs"));
							// parse HTMLatt
						if (!$plant->getLeavesColor())
							$plant->setLeavesColor($this->findPData($infotext, "Couleur des feuilles"));
							// split string
						if (!$plant->getLeaves())
							$plant->setLeaves($this->findPData($infotext, "Feuillage"));
							// parse
						if (!$plant->getShape())
							$plant->setShape($this->findPData($infotext, "Forme"));
						if (!$plant->getHeight())
							$plant->setHeight($this->findPData($infotext, "Largeur à maturité"));
						if (!$plant->getNeedCare())
							$plant->setNeedCare($this->findPData($infotext, "Entretien"));
						if (!$plant->getWater())
							$plant->setWater($this->findPData($infotext, "Besoin en eau"));
						if (!$plant->getGrowth())
							$plant->setGrowth($this->findPData($infotext, "Croissance"));
						if (!$plant->getColdResistance())
							$plant->setColdResistance($this->findPData($infotext, "Résistance au froid"));
						if (!$plant->getSoil())
							$plant->setSoil($this->findPData($infotext, "Type de sol"));
						if (!$plant->getSoilPh())
							$plant->setSoilPh($this->findPData($infotext, "PH du sol"));
						if (!$plant->getSoilHumidity())
							$plant->setSoilHumidity($this->findPData($infotext, "Humidité du sol"));
						if (!$plant->getDensity())
						{
							$data = $this->findPData($infotext, "Densité");
							if ($data)
							{
								$plant->setDensity(round(preg_match_all('/\d+/', $data)));
							}
						}
						if (!$plant->getSun())
							$plant->setSun($this->findPData($infotext, "Exposition"));
						if (!$plant->getPlaces())
							$plant->setPlaces($this->findPData($infotext, "Utilisation extérieure"));
						if (!$plant->getWeather())
							$plant->setWeather($this->findPData($infotext, "Climat"));
						//	$plant->set($this->findPData($infotext, "Plantation"));


					}
//					$entityManager->persist($plant);
//        				$entityManager->flush();

					return $this->render("viewPlant.html.twig", [
						"debug" => null,
						"plant" => $plant
					]);
				}
			}
			$letterUrl++;
		}
		return new Response($url);
//		return new Response($response->getContent());
	}

	private function findPData($allLi, string $title) : ?string
	{
		foreach($allLi as $li)
		{
			$p = $li->find("p");
			$text = preg_replace(['/<span.*span>/', '/<\/?p>/'], '', $p);
			if (!$this->compareExtendString(trim($text[0]), $title))
			{
				if (count($p) > 1)
				{
					return $p[1]->plaintext;
				}
				$spans = $li->find("div");
				if (count($spans))
				{
					return preg_replace(['/<[^>]*display:none[^<]*<strong[^<]*<\/strong>[^>]*>/', '/<[^>]*>/'], '', $spans[0]);
				}
			}
		}
		return null;
	}

	private function compareExtendString(string $s1, string $s2) : bool
	{
		$i = 0;
		while ($i < strlen($s1) && $i < strlen($s2))
		{
			if (ord($s1[$i]) != ord($s2[$i]))
				return true;
			$i++;
		}
		if (strlen($s1) > $i || strlen($s2) > $i)
			return true;
		return false;
	}

	private function htmlToInnerText($a): array
	{
		$result = array();
		foreach($a as $tmp)
		{
			array_push($result, $tmp->innertext);
		}
		return $result;
	}
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlantRepository")
 */
class Plant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $common_names;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $botanical_names;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $family;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $places;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $weather;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $flower_colors;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sun;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $height;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $real_height;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $real_width;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $leaves;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $leaves_color;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $water;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cold_resistance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vegetation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $need_care;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $planting;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $flowering;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $harvest;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pruning;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $shape;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $soil;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $soil_humidity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $soil_ph;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $growth;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $anti_insect;

    /**
     * @ORM\Column(type="integer", length=255, nullable=true)
     */
    private $density;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $species;


    const TYPES = [
		/*
		* 	Arbre
		*/
		"Arbre feuillu",
		"Arbre fruitier",
		"Conifère ou résineux",
		"Palmier",
		"Arbre topiaire",
		"Arbre à fleurs",
		/*
		 *	Arbuste
		 */
		"Arbuste feuillu",
		"Arbuste fruitier",
		"Arbuste à fleurs",
		"Arbuste topiaire",
		/*
		 * 	plante ornementale
		 */
		"à feuillage décoratif",
		"à fleurs",
		"à fruits décoratifs",
		"herbes et graminées",
		"plante grasse, succulente ou cactus",
		"grimpante",
		/*
		 * 	legume
		 */
		"Carnivore",
		"Légume racine",
		"Légume exotique",
		"Légume ancien",
		"Autre légume",
		"Arbre &amp; arbuste fruitier",
		"Petits fruits",
		"Aromatique ou condiment",
		"Plante à tisane",
		"Autre plante médicinale",
		/*
		 *	plante bassin
		 */
		"Immergées et flottantes",
		"Pieds dans l'eau (hélophytes)",
		"Plante de berges (amphiphythes)",
    ];
    const PLACES = [
		"Entrée",
		"Salon / Cuisine",
		"Chambre",
		"Salle de bain",
		"Véranda",
		"Serre chaude",
		"Serre froide",
		"Serre tempérée",
		"Balcon ou terrasse",
		"Bordure ou massif",
		"Haie",
		"Prairie",
		"Couvre-sol",
		"Plantation isolée",
		"Bosquet",
		"Rocaille",
		"Talus",
		"Muret",
		"Bassin",
		"Potagerou verger",
    ];
    const WEATHER = [
		"Océanique",
		"Semi-océanique",
		"Montagnard",
		"Méditerranéen",
		"Continental",
    ];
    const FLOWER_COLORS = [
		"fleur_white",
		"fleur_grey",
		"fleur_yellow",
		"fleur_orange",
		"fleur_red",
		"fleur_pink",
		"fleur_violet_purple",
		"fleur_blue",
		"fleur_green",
		"fleur_black",
		"fleur_multicolor",
    ];
    const SUN = [
	    "Soleil",
	    "Mi-ombre",
	    "Ombre"
    ];
    const HEIGHT = [
	    "Moins de 60 cm",
	    "Entre 60 com et 1,50 m",
	    "Plus du 1,50 m",
    ];
    const LEAVES = ["Persistant", "Semi-persistant", "Semi-caduc", "Caduc"];
    const LEAVES_COLOR = [
		"feuille_silver",
		"feuille_golden",
		"feuille_pale_green",
		"feuille_variegated",
		"feuille_dark_green",
		"feuille_blue",
		"feuille_black",
		"feuille_purple",
		"feuille_red",
    ];
    const COLD_RESISTANCE = [
		"Fragile",
		"À protéger",
		"Résistante"
    ];
    const VEGETATION = [
	    "Vivace",
	    "Annuelle",
	    "Bisannuelle"
    ];
    const NEED_CARE = [
	    "Facile",
	    "Modéré",
	    "Difficile"
    ];
    const CALENDAR = [
		"janv.",
		"fév.",
		"mars",
		"avril",
		"mai",
		"juin",
		"juil.",
		"août",
		"sept.",
		"oct.",
		"nov.",
		"déc.",
    ];
    const SHAPE = [
		"Étalé ou tapissant",
		"Buissonnant",
		"Arrondi, en boule ou ovale",
		"Ouvert ou divergeant",
		"Conique ou pyramidal",
		"Élancé ou colonnaire",
		"Palme ou parasol",
		"Pleureur ou tombant",
		"Palissable",
		"Grimpant",
    ];
    const SOIL = [
		"Calcaire",
		"Argileuse",
		"Caillouteuse",
		"Calcaire",
		"Humifère",
		"Sableuse",
		"Terre de bruyère",
		"Terreau",
    ];
    const SOIL_HUMIDITY = [
		"Sec",
		"Drainé",
		"Frais",
		"Humide",
    ];
    const SOIL_PH = [
		"Alcalin",
		"Neure",
		"Acide"
    ];
    const GROWTH = [
	    	"Lente",
		"Normale",
		"Rapide"
    ];
    const ANTI_INSECT = [
	    	"Moustiques",
		"Pucerons",
		"Limaces",
		"Doryphores",
		"Mouches blanches"
    ];
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommonNames(): ?string
    {
        return $this->common_names;
    }

    public function setCommonNames(?string $common_names): self
    {
        $this->common_names = $common_names;

        return $this;
    }

    public function getBotanicalNames(): ?string
    {
        return $this->botanical_names;
    }

    public function setBotanicalNames(?string $botanical_names): self
    {
        $this->botanical_names = $botanical_names;

        return $this;
    }

    public function getFamily(): ?string
    {
        return $this->family;
    }

    public function setFamily(?string $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPlaces(): ?string
    {
        return $this->places;
    }

    public function setPlaces(?string $places): self
    {
        $this->places = $places;

        return $this;
    }

    public function getWeather(): ?string
    {
        return $this->weather;
    }

    public function setWeather(?string $weather): self
    {
        $this->weather = $weather;

        return $this;
    }

    public function getFlowerColors(): ?string
    {
        return $this->flower_colors;
    }

    public function setFlowerColors(?string $flower_colors): self
    {
        $this->flower_colors = $flower_colors;

        return $this;
    }

    public function getSun(): ?string
    {
        return $this->sun;
    }

    public function setSun(?string $sun): self
    {
        $this->sun = $sun;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getRealHeight(): ?float
    {
        return $this->real_height;
    }

    public function setRealHeight(?float $real_height): self
    {
        $this->real_height = $real_height;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getLeaves(): ?string
    {
        return $this->leaves;
    }

    public function setLeaves(?string $leaves): self
    {
        $this->leaves = $leaves;

        return $this;
    }

    public function getLeavesColor(): ?string
    {
        return $this->leaves_color;
    }

    public function setLeavesColor(?string $leaves_color): self
    {
        $this->leaves_color = $leaves_color;

        return $this;
    }

    public function getWater(): ?string
    {
        return $this->water;
    }

    public function setWater(?string $water): self
    {
        $this->water = $water;

        return $this;
    }

    public function getColdResistance(): ?string
    {
        return $this->cold_resistance;
    }

    public function setColdResistance(?string $cold_resistance): self
    {
        $this->cold_resistance = $cold_resistance;

        return $this;
    }

    public function getVegetation(): ?string
    {
        return $this->vegetation;
    }

    public function setVegetation(?string $vegetation): self
    {
        $this->vegetation = $vegetation;

        return $this;
    }

    public function getNeedCare(): ?string
    {
        return $this->need_care;
    }

    public function setNeedCare(?string $need_care): self
    {
        $this->need_care = $need_care;

        return $this;
    }

    public function getPlanting(): ?string
    {
        return $this->planting;
    }

    public function setPlanting(?string $planting): self
    {
        $this->planting = $planting;

        return $this;
    }

    public function getFlowering(): ?string
    {
        return $this->flowering;
    }

    public function setFlowering(?string $flowering): self
    {
        $this->flowering = $flowering;

        return $this;
    }

    public function getHarvest(): ?string
    {
        return $this->harvest;
    }

    public function setHarvest(?string $harvest): self
    {
        $this->harvest = $harvest;

        return $this;
    }

    public function getPruning(): ?string
    {
        return $this->pruning;
    }

    public function setPruning(?string $pruning): self
    {
        $this->pruning = $pruning;

        return $this;
    }

    public function getShape(): ?string
    {
        return $this->shape;
    }

    public function setShape(?string $shape): self
    {
        $this->shape = $shape;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getSoil(): ?string
    {
        return $this->soil;
    }

    public function setSoil(?string $soil): self
    {
        $this->soil = $soil;

        return $this;
    }

    public function getSoilHumidity(): ?string
    {
        return $this->soil_humidity;
    }

    public function setSoilHumidity(?string $soil_humidity): self
    {
        $this->soil_humidity = $soil_humidity;

        return $this;
    }

    public function getSoilPh(): ?string
    {
        return $this->soil_ph;
    }

    public function setSoilPh(?string $soil_ph): self
    {
        $this->soil_ph = $soil_ph;

        return $this;
    }

    public function getGrowth(): ?string
    {
        return $this->growth;
    }

    public function setGrowth(?string $growth): self
    {
        $this->growth = $growth;

        return $this;
    }

    public function getAntiInsect(): ?string
    {
        return $this->anti_insect;
    }

    public function setAntiInsect(?string $anti_insect): self
    {
        $this->anti_insect = $anti_insect;

        return $this;
    }
    
    public function getDensity(): ?int
    {
        return $this->density;
    }

    public function setDensity(?int $density): self
    {
        $this->density = $density;

        return $this;
    }

    public function getSpecies(): ?string
    {
        return $this->species;
    }

    public function setSpecies(?string $species): self
    {
        $this->species = $species;

        return $this;
    }
    
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpeciesRepository")
 */
class Species
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $common_name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $botanical_names;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $plant_habit;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $life_cycle;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $sun_requirements;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $water_preferences;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $soil_ph_preferences;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $minimum_cold_hardiness;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $maximum_recommended_zone;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $plant_height;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $plant_spread;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $leaves;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $fruit;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $fruiting_time;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $flowers;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $flower_color;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $bloom_size;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $flower_time;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $inflorescence_height;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $foliage_mound_height;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $underground_structure;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $suitable_location;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $uses;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $edible_parts;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $eating_methods;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dynamic_accumulator;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $wildlife_attractant;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $resistances;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $toxicity;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $propagation_seeds;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $propagation_other;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $pollinators;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $containers;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $miscellaneous;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $conservation_status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $garden_url;

    const ENUM_PLANT_HABIT = ["Herb/Forb", "Shrub", "Tree", "Cactus/Succulent", "Grass/Grass-like", "Fern", "Vine"];
    const ENUM_LIFE_CYCLE = ["Annual","Biennial","Perennial","Other"];
    const ENUM_SUN_REQUIREMENTS = ["Full Sun", "Full Sun to Partial Shade", "Partial or Dappled Shade", "Partial Shade to Full Shade", "Full Shade"];
    const ENUM_WATER_PREFERENCES = ["In Water","Wet","Wet Mesic","Mesic","Dry Mesic","Dry"];
    const ENUM_SOIL_PH_PREFERENCES = ["Extremely acid (3.5 – 4.4)",
					"Very strongly acid (4.5 – 5.0)",
					"Strongly acid (5.1 – 5.5)",
					"Moderately acid (5.6 – 6.0)",
					"Slightly acid (6.1 – 6.5)",
					"Neutral (6.6 – 7.3)",
					"Slightly alkaline (7.4 – 7.8)",
					"Moderately alkaline (7.9 – 8.4)",
					"Strongly alkaline (8.5 – 9.0)"];
    const ENUM_MINIMUM_COLD_HARDINESS = ['Zone 2 -45.6 °C (-50 °F) to -42.8 °C (-45°F)',
					' Zone 3 -40 °C (-40 °F) to -37.2 °C (-35)',
					' Zone 4a -34.4 °C (-30 °F) to -31.7 °C (-25 °F)',
					' Zone 4b -31.7 °C (-25 °F) to -28.9 °C (-20 °F)',
					' Zone 5a -28.9 °C (-20 °F) to -26.1 °C (-15 °F)',
					' Zone 5b -26.1 °C (-15 °F) to -23.3 °C (-10 °F)',
					' Zone 6a -23.3 °C (-10 °F) to -20.6 °C (-5 °F)',
					' Zone 6b -20.6 °C (-5 °F) to -17.8 °C (0 °F)',
					' Zone 7a -17.8 °C (0 °F) to -15 °C (5 °F)',
					' Zone 7b -15 °C (5 °F) to -12.2 °C (10 °F)',
					' Zone 8a -12.2 °C (10 °F) to -9.4 °C (15 °F)',
					' Zone 8b -9.4 °C (15 °F) to -6.7 °C (20 °F)',
					' Zone 9a -6.7 °C (20 °F) to -3.9 °C (25 °F)',
					' Zone 9b -3.9 °C (25 °F) to -1.1 °C (30 °F)',
					' Zone 10a -1.1 °C (30 °F) to +1.7 °C (35 °F)',
					' Zone 10b +1.7 °C (35 °F) to +4.4 °C (40 °F)',
					' Zone 11 +4.4 °C (40 °F) to +7.2 °C (50 °F)',
					' Zone 12 +10 °C (50 °F) to +15.6 °C (60 °F)',
					' Zone 13 +15.6 °C (60 °F) to +21.1 °C (70 °F)',];
    const ENUM_MAXIMUM_RECOMMENDED_ZONE = [' Zone 2',' Zone 3',' Zone 4a',' Zone 4b',' Zone 5a',' Zone 5b',' Zone 6a',' Zone 6b',' Zone 7a',' Zone 7b',' Zone 8a',' Zone 8b',' Zone 9a',' Zone 9b',' Zone 10a',' Zone 10b',' Zone 11',' Zone 12',' Zone 13',
    ];
    const ENUM_LEAVES = ["Good fall color","Glaucous","Unusual foliage color","Evergreen","Semi-evergreen","Deciduous","Fragrant","Malodorous","Variegated","Spring ephemeral","Needled","Broadleaf","Other",];
    const ENUM_FRUIT = ["Showy","Edible to birds","Dehiscent","Indehiscent","Pops open explosively when ripe","Other",];
    
    //for attributes that contain "time"
    const ENUM_SEASON = ["Late winter or early spring","Spring","Late spring or early summer","Summer","Late summer or early fall","Fall","Late fall or early winter","Winter","Year Round","Other",];
    const ENUM_FLOWER = ["Showy","Inconspicuous","Fragrant","Malodorous","Nocturnal","Blooms on old wood","Blooms on new wood","Other",];
    const ENUM_FLOWER_COLOR = ["Brown","Green","Blue","Lavender","Mauve","Orange","Pink","Purple","Red","Russet","White","Yellow","Bi-Color","Multi-Color","Other",];
    const ENUM_BLOOM_SIZE = ['Under 1"','1"-2"','2"-3"','3"-4"','4"-5"','5"-6"','6"-12"','Over 12"',];
    const ENUM_UNDERGROUND_STRUCTURE = ['Rhizome','Taproot','Corm','Bulb','Tuber','Caudex',];
    const ENUM_SUITABLE_LOCATION = ['Beach Front','Street Tree','Patio/Ornamental/Small Tree','Xeriscapic','Houseplant','Terrariums','Bog gardening','Alpine Gardening','Espalier','Topiary',];
    const ENUM_USES = ['Windbreak or Hedge',
			'Dye production',
			'Provides winter interest',
			'Erosion control',
			'Guardian plant',
			'Groundcover',
			'Shade Tree',
			'Flowering Tree',
			'Water gardens',
			'Culinary Herb',
			'Medicinal Herb',
			'Vegetable',
			'Salad greens',
			'Cooked greens',
			'Cut Flower',
			'Dried Flower',
			'Will Naturalize',
			'Good as a cover crop',
			'Suitable as Annual',
			'Suitable for forage',
			'Useful for timber production',
			'Suitable for miniature gardens',];
    const ENUM_EDIBLE_PARTS = ['Bark','Stem','Leaves','Roots','Seeds or Nuts','Sap','Fruit','Flowers',];
    const ENUM_EATING_METHODS = ['Tea','Culinary Herb/Spice','Raw','Cooked','Fermented',];
    const ENUM_DYNAMIC_ACCUMULATOR = ['Nitrogen fixer','P (Phosphorus)','K (Potassium)','Ca (Calcium)','Mg (Magnesium)','S (Sulfur)','Fe (Iron)','B (Boron)','Mn (Manganese)','Zn (Zinc)','Cu (Copper)','Mo (Molybdenum)','Si (Silicon)','Co (Cobalt)','Na (Sodium)','I (Iodine)',];
    const ENUM_WILDLIFE_ATTRACTANT = ['Bees','Birds','Butterflies','Hummingbirds','Other Beneficial Insects',];
    const ENUM_RESISTANCES = ['Powdery Mildew','Birds','Deer Resistant','Gophers/Voles','Rabbit Resistant','Squirrels','Pollution','Fire Resistant','Flood Resistant','Tolerates dry shade','Tolerates foot traffic','Humidity tolerant','Drought tolerant','Salt tolerant',];
    const ENUM_TOXICITY = ['Leaves are poisonous','Roots are poisonous','Fruit is poisonous','Other',];
    const ENUM_PROPAGATION_SEEDS = ['Provide light',
					'Self fertile',
					'Provide darkness',
					'Stratify seeds',
					'Scarify seeds',
					'Needs specific temperature',
					'Days to germinate',
					'Depth to plant seed',
					'Suitable for wintersowing',
					'Sow in situ',
					'Start indoors',
					'Can handle transplanting',
					'Seeds are hydrophilic',
					'Will not come true from seed',
					'Other info',];
    const ENUM_PROPAGATION_OTHER = ['Cuttings: Stem','Cuttings: Tip','Cuttings: Cane','Cuttings: Leaf','Cuttings: Root','Layering','Division','Stolons and runners','Offsets','Bulbs','Corms','Crowns','Other',];
    const ENUM_POLLINATORS = ['Self','Other','Hoverflies','Wasps','Water','Beetles','Moths and Butterflies','Midges','Flies','Bats','Birds','Bumblebees','Bees','Wind','Various insects','Cleistogamous',];
    const ENUM_CONTAINERS = ['Suitable in 1 gallon','Suitable in 3 gallon or larger','Suitable for hanging baskets','Needs repotting every 2 to 3 years','Needs excellent drainage in pots','Preferred depth','Prefers to be under-potted','Not suitable for containers',];
    const ENUM_MISCELLANEOUS = ["Tolerates poor soil",
				"With thorns/spines/prickles/teeth",
				"Monoecious",
				"Dioecious",
				"Patent/Plant Breeders' Rights",
				"Genetically Modified",
				"Epiphytic",
				"Monocarpic",
				"Carnivorous",
				"Goes Dormant",
				"Endangered",];
    const ENUM_CONSERVATION_STATUS = ['Vulnerable (VU)",','Endangered (EN)",','Critically Endangered (CR)",','Extinct in the Wild (EW)",','Extinct (EX)",',];


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCommonName(): ?string
    {
        return $this->common_name;
    }

    public function setCommonName(?string $common_name): self
    {
        $this->common_name = $common_name;

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

    public function getPlantHabit(): ?string
    {
        return $this->plant_habit;
    }

    public function setPlantHabit(?string $plant_habit): self
    {
        $this->plant_habit = $plant_habit;

        return $this;
    }

    public function getLifeCycle(): ?string
    {
        return $this->life_cycle;
    }

    public function setLifeCycle(?string $life_cycle): self
    {
        $this->life_cycle = $life_cycle;

        return $this;
    }

    public function getSunRequirements(): ?string
    {
        return $this->sun_requirements;
    }

    public function setSunRequirements(?string $sun_requirements): self
    {
        $this->sun_requirements = $sun_requirements;

        return $this;
    }

    public function getWaterPreferences(): ?string
    {
        return $this->water_preferences;
    }

    public function setWaterPreferences(?string $water_preferences): self
    {
        $this->water_preferences = $water_preferences;

        return $this;
    }

    public function getSoilPhPreferences(): ?string
    {
        return $this->soil_ph_preferences;
    }

    public function setSoilPhPreferences(?string $soil_ph_preferences): self
    {
        $this->soil_ph_preferences = $soil_ph_preferences;

        return $this;
    }

    public function getMinimumColdHardiness(): ?string
    {
        return $this->minimum_cold_hardiness;
    }

    public function setMinimumColdHardiness(?string $minimum_cold_hardiness): self
    {
        $this->minimum_cold_hardiness = $minimum_cold_hardiness;

        return $this;
    }

    public function getMaximumRecommendedZone(): ?string
    {
        return $this->maximum_recommended_zone;
    }

    public function setMaximumRecommendedZone(?string $maximum_recommended_zone): self
    {
        $this->maximum_recommended_zone = $maximum_recommended_zone;

        return $this;
    }

    public function getPlantEight(): ?string
    {
        return $this->plant_eight;
    }

    public function setPlantEight(?string $plant_eight): self
    {
        $this->plant_eight = $plant_eight;

        return $this;
    }

    public function getPlantSpread(): ?string
    {
        return $this->plant_spread;
    }

    public function setPlantSpread(?string $plant_spread): self
    {
        $this->plant_spread = $plant_spread;

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

    public function getFruit(): ?string
    {
        return $this->fruit;
    }

    public function setFruit(?string $fruit): self
    {
        $this->fruit = $fruit;

        return $this;
    }

    public function getFruitingTime(): ?string
    {
        return $this->fruiting_time;
    }

    public function setFruitingTime(?string $fruiting_time): self
    {
        $this->fruiting_time = $fruiting_time;

        return $this;
    }

    public function getFlowers(): ?string
    {
        return $this->flowers;
    }

    public function setFlowers(?string $flowers): self
    {
        $this->flowers = $flowers;

        return $this;
    }

    public function getFlowerColor(): ?string
    {
        return $this->flower_color;
    }

    public function setFlowerColor(?string $flower_color): self
    {
        $this->flower_color = $flower_color;

        return $this;
    }

    public function getBloomSize(): ?string
    {
        return $this->bloom_size;
    }

    public function setBloomSize(?string $bloom_size): self
    {
        $this->bloom_size = $bloom_size;

        return $this;
    }

    public function getFlowerTime(): ?string
    {
        return $this->flower_time;
    }

    public function setFlowerTime(?string $flower_time): self
    {
        $this->flower_time = $flower_time;

        return $this;
    }

    public function getInflorescenceHeight(): ?float
    {
        return $this->inflorescence_height;
    }

    public function setInflorescenceHeight(?float $inflorescence_height): self
    {
        $this->inflorescence_height = $inflorescence_height;

        return $this;
    }

    public function getFoliageMoundHeight(): ?float
    {
        return $this->foliage_mound_height;
    }

    public function setFoliageMoundHeight(?float $foliage_mound_height): self
    {
        $this->foliage_mound_height = $foliage_mound_height;

        return $this;
    }

    public function getUndergroundStructure(): ?string
    {
        return $this->underground_structure;
    }

    public function setUndergroundStructure(?string $underground_structure): self
    {
        $this->underground_structure = $underground_structure;

        return $this;
    }

    public function getSuitableLocation(): ?string
    {
        return $this->suitable_location;
    }

    public function setSuitableLocation(?string $suitable_location): self
    {
        $this->suitable_location = $suitable_location;

        return $this;
    }

    public function getUses(): ?string
    {
        return $this->uses;
    }

    public function setUses(?string $uses): self
    {
        $this->uses = $uses;

        return $this;
    }

    public function getEdibleParts(): ?string
    {
        return $this->edible_parts;
    }

    public function setEdibleParts(?string $edible_parts): self
    {
        $this->edible_parts = $edible_parts;

        return $this;
    }

    public function getEatingMethods(): ?string
    {
        return $this->eating_methods;
    }

    public function setEatingMethods(?string $eating_methods): self
    {
        $this->eating_methods = $eating_methods;

        return $this;
    }

    public function getDynamicAccumulator(): ?string
    {
        return $this->dynamic_accumulator;
    }

    public function setDynamicAccumulator(?string $dynamic_accumulator): self
    {
        $this->dynamic_accumulator = $dynamic_accumulator;

        return $this;
    }

    public function getWildlifeAttractant(): ?string
    {
        return $this->wildlife_attractant;
    }

    public function setWildlifeAttractant(int $wildlife_attractant): self
    {
        $this->wildlife_attractant = $wildlife_attractant;

        return $this;
    }

    public function getResistances(): ?string
    {
        return $this->resistances;
    }

    public function setResistances(?string $resistances): self
    {
        $this->resistances = $resistances;

        return $this;
    }

    public function getToxicity(): ?string
    {
        return $this->toxicity;
    }

    public function setToxicity(?string $toxicity): self
    {
        $this->toxicity = $toxicity;

        return $this;
    }

    public function getPropagationSeeds(): ?string
    {
        return $this->propagation_seeds;
    }

    public function setPropagationSeeds(?string $propagation_seeds): self
    {
        $this->propagation_seeds = $propagation_seeds;

        return $this;
    }

    public function getPropagationOther(): ?string
    {
        return $this->propagation_other;
    }

    public function setPropagationOther(?string $propagation_other): self
    {
        $this->propagation_other = $propagation_other;

        return $this;
    }

    public function getPollinators(): ?string
    {
        return $this->pollinators;
    }

    public function setPollinators(?string $pollinators): self
    {
        $this->pollinators = $pollinators;

        return $this;
    }

    public function getContainers(): ?string
    {
        return $this->containers;
    }

    public function setContainers(?string $containers): self
    {
        $this->containers = $containers;

        return $this;
    }

    public function getMiscellaneous(): ?string
    {
        return $this->miscellaneous;
    }

    public function setMiscellaneous(?string $miscellaneous): self
    {
        $this->miscellaneous = $miscellaneous;

        return $this;
    }

    public function getConservationStatus(): ?string
    {
        return $this->conservation_status;
    }

    public function setConservationStatus(?string $conservation_status): self
    {
        $this->conservation_status = $conservation_status;

        return $this;
    }

    public function getGardenUrl(): ?string
    {
        return $this->garden_url;
    }

    public function setGardenUrl(string $garden_url): self
    {
        $this->garden_url = $garden_url;

        return $this;
    }

    public function enumToInt($field, $value)
    {
	    switch ($field) {
		case "plant_habit":
			return array_search($value, SELF::ENUM_PLANT_HABIT);
		case "life_cycle":
			return array_search($value, SELF::ENUM_LIFE_CYCLE );
		case "sun_requirements":
			return array_search($value, SELF::ENUM_SUN_REQUIREMENTS);
		case "water_preferences":
			return array_search($value, SELF::ENUM_WATER_PREFERENCES);
		case "soil_ph_preferences":
			return array_search($value, SELF::ENUM_SOIL_PH_PREFERENCES);
		case "minimum_cold_hardiness":
			return array_search($value, SELF::ENUM_MINIMUM_COLD_HARDINESS);
		case "maximum_recommended_zone":
			return array_search($value, SELF::ENUM_MAXIMUM_RECOMMENDED_ZONE);
		case "leaves":
			return array_search($value, SELF::ENUM_LEAVES);
		case "fruit":
			return array_search($value, SELF::ENUM_FRUIT);
		case "fruiting_time":
			return array_search($value, SELF::ENUM_SEASON);
		case "flower_time":
			return array_search($value, SELF::ENUM_SEASON);
		case "flowers":
			return array_search($value, SELF::ENUM_FLOWER);
		case "flower_color":
			return array_search($value, SELF::ENUM_FLOWER_COLOR);
		case "bloom_size":
			return array_search($value, SELF::ENUM_BLOOM_SIZE);
		case "underground_structures":
			return array_search($value, SELF::ENUM_UNDERGROUND_STRUCTURE);
		case "suitable_locations":
			return array_search($value, SELF::ENUM_SUITABLE_LOCATION);
		case "uses":
			return array_search($value, SELF::ENUM_USES);
		case "edible_parts":
			return array_search($value, SELF::ENUM_EDIBLE_PARTS);
		case "eating_methods":
			return array_search($value, SELF::ENUM_EATING_METHODS);
		case "dynamic_accumulator":
			return array_search($value, SELF::ENUM_DYNAMIC_ACCUMULATOR);
		case "wildlife_attractant":
			return array_search($value, SELF::ENUM_WILDLIFE_ATTRACTANT);
		case "resistances":
			return array_search($value, SELF::ENUM_RESISTANCES);
		case "toxicity":
			return array_search($value, SELF::ENUM_TOXICITY);
		case "propagation_seeds":
			return array_search($value, SELF::ENUM_PROPAGATION_SEEDS);
		case "propagation_seeds":
			return array_search($value, SELF::ENUM_PROPAGATION_OTHER);
		case "pollinators":
			return array_search($value, SELF::ENUM_POLLINATORS);
		case "containers":
			return array_search($value, SELF::ENUM_CONTAINERS);
		case "miscellaneous":
			return array_search($value, SELF::ENUM_MISCELLANEOUS);
		case "conservation_status":
			return array_search($value, SELF::ENUM_CONSERVATION_STATUS);
		default:
			return $value;

	    }
    }
}

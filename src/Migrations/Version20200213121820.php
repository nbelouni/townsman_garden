<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200213121820 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE plant ADD density INT DEFAULT NULL, ADD species LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE species CHANGE plant_habit plant_habit VARCHAR(255) DEFAULT NULL, CHANGE life_cycle life_cycle VARCHAR(255) DEFAULT NULL, CHANGE sun_requirements sun_requirements VARCHAR(255) DEFAULT NULL, CHANGE water_preferences water_preferences VARCHAR(255) DEFAULT NULL, CHANGE soil_ph_preferences soil_ph_preferences VARCHAR(255) DEFAULT NULL, CHANGE minimum_cold_hardiness minimum_cold_hardiness VARCHAR(255) DEFAULT NULL, CHANGE maximum_recommended_zone maximum_recommended_zone VARCHAR(255) DEFAULT NULL, CHANGE leaves leaves VARCHAR(255) DEFAULT NULL, CHANGE fruit fruit VARCHAR(255) DEFAULT NULL, CHANGE fruiting_time fruiting_time VARCHAR(255) DEFAULT NULL, CHANGE flowers flowers VARCHAR(255) DEFAULT NULL, CHANGE flower_color flower_color VARCHAR(255) DEFAULT NULL, CHANGE bloom_size bloom_size VARCHAR(255) DEFAULT NULL, CHANGE flower_time flower_time VARCHAR(255) DEFAULT NULL, CHANGE underground_structure underground_structure VARCHAR(255) DEFAULT NULL, CHANGE suitable_location suitable_location VARCHAR(255) DEFAULT NULL, CHANGE uses uses VARCHAR(255) DEFAULT NULL, CHANGE edible_parts edible_parts VARCHAR(255) DEFAULT NULL, CHANGE eating_methods eating_methods VARCHAR(255) DEFAULT NULL, CHANGE dynamic_accumulator dynamic_accumulator VARCHAR(255) DEFAULT NULL, CHANGE wildlife_attractant wildlife_attractant VARCHAR(255) DEFAULT NULL, CHANGE resistances resistances VARCHAR(255) DEFAULT NULL, CHANGE toxicity toxicity VARCHAR(255) DEFAULT NULL, CHANGE propagation_seeds propagation_seeds VARCHAR(255) DEFAULT NULL, CHANGE propagation_other propagation_other VARCHAR(255) DEFAULT NULL, CHANGE pollinators pollinators VARCHAR(255) DEFAULT NULL, CHANGE containers containers VARCHAR(255) DEFAULT NULL, CHANGE miscellaneous miscellaneous VARCHAR(255) DEFAULT NULL, CHANGE conservation_status conservation_status VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE plant DROP density, DROP species');
        $this->addSql('ALTER TABLE species CHANGE plant_habit plant_habit INT DEFAULT NULL, CHANGE life_cycle life_cycle INT DEFAULT NULL, CHANGE sun_requirements sun_requirements INT DEFAULT NULL, CHANGE water_preferences water_preferences INT DEFAULT NULL, CHANGE soil_ph_preferences soil_ph_preferences INT DEFAULT NULL, CHANGE minimum_cold_hardiness minimum_cold_hardiness INT DEFAULT NULL, CHANGE maximum_recommended_zone maximum_recommended_zone INT DEFAULT NULL, CHANGE leaves leaves INT DEFAULT NULL, CHANGE fruit fruit INT DEFAULT NULL, CHANGE fruiting_time fruiting_time INT DEFAULT NULL, CHANGE flowers flowers INT DEFAULT NULL, CHANGE flower_color flower_color INT DEFAULT NULL, CHANGE bloom_size bloom_size INT DEFAULT NULL, CHANGE flower_time flower_time INT DEFAULT NULL, CHANGE underground_structure underground_structure INT DEFAULT NULL, CHANGE suitable_location suitable_location INT DEFAULT NULL, CHANGE uses uses INT DEFAULT NULL, CHANGE edible_parts edible_parts INT DEFAULT NULL, CHANGE eating_methods eating_methods INT DEFAULT NULL, CHANGE dynamic_accumulator dynamic_accumulator INT DEFAULT NULL, CHANGE wildlife_attractant wildlife_attractant INT DEFAULT NULL, CHANGE resistances resistances INT DEFAULT NULL, CHANGE toxicity toxicity INT DEFAULT NULL, CHANGE propagation_seeds propagation_seeds INT DEFAULT NULL, CHANGE propagation_other propagation_other INT DEFAULT NULL, CHANGE pollinators pollinators INT DEFAULT NULL, CHANGE containers containers INT DEFAULT NULL, CHANGE miscellaneous miscellaneous INT DEFAULT NULL, CHANGE conservation_status conservation_status INT DEFAULT NULL');
    }
}

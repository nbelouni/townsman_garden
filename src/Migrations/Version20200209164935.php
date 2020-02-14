<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200209164935 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE species (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, common_name LONGTEXT DEFAULT NULL, botanical_names LONGTEXT DEFAULT NULL, plant_habit INT DEFAULT NULL, life_cycle INT DEFAULT NULL, sun_requirements INT DEFAULT NULL, water_preferences INT DEFAULT NULL, soil_ph_preferences INT DEFAULT NULL, minimum_cold_hardiness INT DEFAULT NULL, maximum_recommended_zone INT DEFAULT NULL, plant_height DOUBLE PRECISION DEFAULT NULL, plant_spread DOUBLE PRECISION DEFAULT NULL, leaves INT DEFAULT NULL, fruit INT DEFAULT NULL, fruiting_time INT DEFAULT NULL, flowers INT DEFAULT NULL, flower_color INT DEFAULT NULL, bloom_size INT DEFAULT NULL, flower_time INT DEFAULT NULL, inflorescence_height DOUBLE PRECISION DEFAULT NULL, foliage_mound_height DOUBLE PRECISION DEFAULT NULL, underground_structure INT DEFAULT NULL, suitable_location INT DEFAULT NULL, uses INT DEFAULT NULL, edible_parts INT DEFAULT NULL, eating_methods INT DEFAULT NULL, dynamic_accumulator INT DEFAULT NULL, wildlife_attractant INT DEFAULT NULL, resistances INT DEFAULT NULL, toxicity INT DEFAULT NULL, propagation_seeds INT DEFAULT NULL, propagation_other INT DEFAULT NULL, pollinators INT DEFAULT NULL, containers INT DEFAULT NULL, miscellaneous INT DEFAULT NULL, conservation_status INT DEFAULT NULL, garden_url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE species');
    }
}

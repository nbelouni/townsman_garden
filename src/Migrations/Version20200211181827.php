<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200211181827 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE plant (id INT AUTO_INCREMENT NOT NULL, common_names LONGTEXT DEFAULT NULL, botanical_names LONGTEXT DEFAULT NULL, family VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, places VARCHAR(255) DEFAULT NULL, weather VARCHAR(255) DEFAULT NULL, flower_colors VARCHAR(255) DEFAULT NULL, sun VARCHAR(255) DEFAULT NULL, height VARCHAR(255) DEFAULT NULL, real_height DOUBLE PRECISION DEFAULT NULL, real_width DOUBLE PRECISION DEFAULT NULL, leaves VARCHAR(255) DEFAULT NULL, leaves_color VARCHAR(255) DEFAULT NULL, water VARCHAR(255) DEFAULT NULL, cold_resistance VARCHAR(255) DEFAULT NULL, vegetation VARCHAR(255) DEFAULT NULL, need_care VARCHAR(255) DEFAULT NULL, planting VARCHAR(255) DEFAULT NULL, flowering VARCHAR(255) DEFAULT NULL, harvest VARCHAR(255) DEFAULT NULL, pruning VARCHAR(255) DEFAULT NULL, shape VARCHAR(255) DEFAULT NULL, url VARCHAR(255) NOT NULL, soil VARCHAR(255) DEFAULT NULL, soil_humidity VARCHAR(255) DEFAULT NULL, soil_ph VARCHAR(255) DEFAULT NULL, growth VARCHAR(255) DEFAULT NULL, anti_insect VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE plant');
    }
}

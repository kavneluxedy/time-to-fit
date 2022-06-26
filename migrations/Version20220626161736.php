<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220626161736 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, gender TINYINT(1) NOT NULL, date_of_birth DATE NOT NULL, height DOUBLE PRECISION NOT NULL, weight DOUBLE PRECISION NOT NULL, morphology VARCHAR(50) NOT NULL, daily_habit VARCHAR(50) NOT NULL, disponibility_hours VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_profile CHANGE disponibility_hours disponibility_hours VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE profile');
        $this->addSql('ALTER TABLE user_profile CHANGE disponibility_hours disponibility_hours LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }
}

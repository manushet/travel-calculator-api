<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240425101327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE age_discount_rule (id SERIAL NOT NULL, min_age_limit INT NOT NULL, max_age_limit INT NOT NULL, modifier DOUBLE PRECISION NOT NULL, amount_limit INT NOT NULL, is_active BOOLEAN NOT NULL, valid_date_from DATE DEFAULT NULL, valid_date_to DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE early_booking_discount_rule (id SERIAL NOT NULL, early_booking_range_rule_id INT NOT NULL, payment_date_from VARCHAR(5) NOT NULL, payment_date_to VARCHAR(5) NOT NULL, modifier DOUBLE PRECISION NOT NULL, amount_limit INT NOT NULL, is_active BOOLEAN NOT NULL, valid_date_from DATE DEFAULT NULL, valid_date_to DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B74FBBD84B77E61D ON early_booking_discount_rule (early_booking_range_rule_id)');
        $this->addSql('CREATE TABLE early_booking_range_rule (id SERIAL NOT NULL, booking_date_from VARCHAR(5) NOT NULL, is_booking_date_from_next BOOLEAN NOT NULL, booking_date_to VARCHAR(5) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE early_booking_discount_rule ADD CONSTRAINT FK_B74FBBD84B77E61D FOREIGN KEY (early_booking_range_rule_id) REFERENCES early_booking_range_rule (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE early_booking_discount_rule DROP CONSTRAINT FK_B74FBBD84B77E61D');
        $this->addSql('DROP TABLE age_discount_rule');
        $this->addSql('DROP TABLE early_booking_discount_rule');
        $this->addSql('DROP TABLE early_booking_range_rule');
    }
}

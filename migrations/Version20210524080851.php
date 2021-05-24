<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210524080851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD type_entreprise VARCHAR(255) NOT NULL, ADD date_de_creation DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD prix_demande INT NOT NULL, ADD nom_responsable VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD date_de_naissance DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD adresse VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP type_entreprise, DROP date_de_creation, DROP prix_demande, DROP nom_responsable, DROP prenom, DROP date_de_naissance, DROP adresse');
    }
}

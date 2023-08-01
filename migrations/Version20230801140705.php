<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230801140705 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule ADD compte_affaire VARCHAR(255) DEFAULT NULL, ADD compte_evenement VARCHAR(255) DEFAULT NULL, ADD compte_dernier_evenement VARCHAR(255) DEFAULT NULL, ADD numero_de_fiche VARCHAR(255) DEFAULT NULL, ADD libelle_civilite VARCHAR(255) DEFAULT NULL, ADD proprietaire_actuel_du_vehicule VARCHAR(255) DEFAULT NULL, ADD numero_et_nom_de_voie VARCHAR(255) DEFAULT NULL, ADD complement_adresse1 VARCHAR(255) DEFAULT NULL, ADD code_postal VARCHAR(255) DEFAULT NULL, ADD ville VARCHAR(255) DEFAULT NULL, ADD telephone_domicile VARCHAR(255) DEFAULT NULL, ADD telephone_portable VARCHAR(255) DEFAULT NULL, ADD email VARCHAR(255) DEFAULT NULL, ADD date_de_mise_en_circulation VARCHAR(255) DEFAULT NULL, ADD date_achat VARCHAR(255) DEFAULT NULL, ADD date_dernier_evenement VARCHAR(255) DEFAULT NULL, ADD libelle_marque VARCHAR(255) DEFAULT NULL, ADD libelle_modele VARCHAR(255) DEFAULT NULL, ADD verion VARCHAR(255) DEFAULT NULL, ADD vin VARCHAR(255) DEFAULT NULL, ADD type_de_prospect VARCHAR(255) DEFAULT NULL, ADD kilometrage VARCHAR(255) DEFAULT NULL, ADD libelle_energie VARCHAR(255) DEFAULT NULL, ADD vendeur_vn VARCHAR(255) DEFAULT NULL, ADD vendeur_vo VARCHAR(255) DEFAULT NULL, ADD commentaire_de_facturation VARCHAR(255) DEFAULT NULL, ADD type_vn_vo VARCHAR(255) DEFAULT NULL, ADD numero_de_dossier_vn_vo VARCHAR(255) DEFAULT NULL, ADD intermediaire_de_vente_vn VARCHAR(255) DEFAULT NULL, ADD date_evenement VARCHAR(255) DEFAULT NULL, ADD origine_evenement VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP compte_affaire, DROP compte_evenement, DROP compte_dernier_evenement, DROP numero_de_fiche, DROP libelle_civilite, DROP proprietaire_actuel_du_vehicule, DROP numero_et_nom_de_voie, DROP complement_adresse1, DROP code_postal, DROP ville, DROP telephone_domicile, DROP telephone_portable, DROP email, DROP date_de_mise_en_circulation, DROP date_achat, DROP date_dernier_evenement, DROP libelle_marque, DROP libelle_modele, DROP verion, DROP vin, DROP type_de_prospect, DROP kilometrage, DROP libelle_energie, DROP vendeur_vn, DROP vendeur_vo, DROP commentaire_de_facturation, DROP type_vn_vo, DROP numero_de_dossier_vn_vo, DROP intermediaire_de_vente_vn, DROP date_evenement, DROP origine_evenement');
    }
}

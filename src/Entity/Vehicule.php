<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 */
class Vehicule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $compteAffaire = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $compteEvenement = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $compteDernierEvenement = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $numeroDeFiche = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $libelleCivilite = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $proprietaireActuelDuVehicule = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $nom = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $prenom = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $numeroEtNomDeVoie = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $complementAdresse1 = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $codePostal = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $ville = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $telephoneDomicile = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $telephonePortable = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $email = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $dateDeMiseEnCirculation = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $dateAchat = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $dateDernierEvenement = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $libelleMarque = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $libelleModele = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $version = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $vin = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $immatriculation = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $typeDeProspect = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $kilometrage = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $libelleEnergie = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $vendeurVn = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $vendeurVo = null;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaireDeFacturation = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeVnVo = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroDeDossierVnVo = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $intermediaireDeVenteVn = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateEvenement = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $origineEvenement = null;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->compteAffaire;
    }

    public function setCompteAffaire(?string $compteAffaire): self
    {
        $this->compteAffaire = $compteAffaire;

        return $this;
    }

    public function getCompteEvenement(): ?string
    {
        return $this->compteEvenement;
    }

    public function setCompteEvenement(?string $compteEvenement): self
    {
        $this->compteEvenement = $compteEvenement;

        return $this;
    }

    public function getCompteDernierEvenement(): ?string
    {
        return $this->compteDernierEvenement;
    }

    public function setCompteDernierEvenement(?string $compteDernierEvenement): self
    {
        $this->compteDernierEvenement = $compteDernierEvenement;

        return $this;
    }

    public function getNumeroDeFiche(): ?string
    {
        return $this->numeroDeFiche;
    }

    public function setNumeroDeFiche(?string $numeroDeFiche): self
    {
        $this->numeroDeFiche = $numeroDeFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->libelleCivilite;
    }

    public function setLibelleCivilite(?string $libelleCivilite): self
    {
        $this->libelleCivilite = $libelleCivilite;

        return $this;
    }

    public function getProprietaireActuelDuVehicule(): ?string
    {
        return $this->proprietaireActuelDuVehicule;
    }

    public function setProprietaireActuelDuVehicule(?string $proprietaireActuelDuVehicule): self
    {
        $this->proprietaireActuelDuVehicule = $proprietaireActuelDuVehicule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumeroEtNomDeVoie(): ?string
    {
        return $this->numeroEtNomDeVoie;
    }

    public function setNumeroEtNomDeVoie(?string $numeroEtNomDeVoie): self
    {
        $this->numeroEtNomDeVoie = $numeroEtNomDeVoie;

        return $this;
    }

    public function getComplementAdresse1(): ?string
    {
        return $this->complementAdresse1;
    }

    public function setComplementAdresse1(?string $complementAdresse1): self
    {
        $this->complementAdresse1 = $complementAdresse1;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephoneDomicile(): ?string
    {
        return $this->telephoneDomicile;
    }

    public function setTelephoneDomicile(?string $telephoneDomicile): self
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    public function getTelephonePortable(): ?string
    {
        return $this->telephonePortable;
    }

    public function setTelephonePortable(?string $telephonePortable): self
    {
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateDeMiseEnCirculation(): ?string
    {
        return $this->dateDeMiseEnCirculation;
    }

    public function setDateDeMiseEnCirculation(?string $dateDeMiseEnCirculation): self
    {
        $this->dateDeMiseEnCirculation = $dateDeMiseEnCirculation;

        return $this;
    }

    public function getDateAchat(): ?string
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?string $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateDernierEvenement(): ?string
    {
        return $this->dateDernierEvenement;
    }

    public function setDateDernierEvenement(?string $dateDernierEvenement): self
    {
        $this->dateDernierEvenement = $dateDernierEvenement;

        return $this;
    }

    public function getLibelleMarque(): ?string
    {
        return $this->libelleMarque;
    }

    public function setLibelleMarque(?string $libelleMarque): self
    {
        $this->libelleMarque = $libelleMarque;

        return $this;
    }

    public function getLibelleModele(): ?string
    {
        return $this->libelleModele;
    }

    public function setLibelleModele(?string $libelleModele): self
    {
        $this->libelleModele = $libelleModele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getTypeDeProspect(): ?string
    {
        return $this->typeDeProspect;
    }

    public function setTypeDeProspect(?string $typeDeProspect): self
    {
        $this->typeDeProspect = $typeDeProspect;

        return $this;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?string $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getLibelleEnergie(): ?string
    {
        return $this->libelleEnergie;
    }

    public function setLibelleEnergie(?string $libelleEnergie): self
    {
        $this->libelleEnergie = $libelleEnergie;

        return $this;
    }

    public function getVendeurVn(): ?string
    {
        return $this->vendeurVn;
    }

    public function setVendeurVn(?string $vendeurVn): self
    {
        $this->vendeurVn = $vendeurVn;

        return $this;
    }

    public function getVendeurVo(): ?string
    {
        return $this->vendeurVo;
    }

    public function setVendeurVo(?string $vendeurVo): self
    {
        $this->vendeurVo = $vendeurVo;

        return $this;
    }

    public function getCommentaireDeFacturation(): ?string
    {
        return $this->commentaireDeFacturation;
    }

    public function setCommentaireDeFacturation(?string $commentaireDeFacturation): self
    {
        $this->commentaireDeFacturation = $commentaireDeFacturation;

        return $this;
    }

    public function getTypeVnVo(): ?string
    {
        return $this->typeVnVo;
    }

    public function setTypeVnVo(?string $typeVnVo): self
    {
        $this->typeVnVo = $typeVnVo;

        return $this;
    }

    public function getNumeroDeDossierVnVo(): ?string
    {
        return $this->numeroDeDossierVnVo;
    }

    public function setNumeroDeDossierVnVo(?string $numeroDeDossierVnVo): self
    {
        $this->numeroDeDossierVnVo = $numeroDeDossierVnVo;

        return $this;
    }

    public function getIntermediaireDeVenteVn(): ?string
    {
        return $this->intermediaireDeVenteVn;
    }

    public function setIntermediaireDeVenteVn(?string $intermediaireDeVenteVn): self
    {
        $this->intermediaireDeVenteVn = $intermediaireDeVenteVn;

        return $this;
    }

    public function getDateEvenement(): ?string
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(?string $dateEvenement): self
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    public function getOrigineEvenement(): ?string
    {
        return $this->origineEvenement;
    }

    public function setOrigineEvenement(?string $origineEvenement): self
    {
        $this->origineEvenement = $origineEvenement;

        return $this;
    }




}
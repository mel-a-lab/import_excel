<?php

namespace App\Form;

use App\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('compteAffaire')
            ->add('compteEvenement')
            ->add('compteDernierEvenement')
            ->add('numeroDeFiche')
            ->add('libelleCivilite')
            ->add('proprietaireActuelDuVehicule')
            ->add('nom')
            ->add('prenom')
            ->add('numeroEtNomDeVoie')
            ->add('complementAdresse1')
            ->add('codePostal')
            ->add('ville')
            ->add('telephoneDomicile')
            ->add('telephonePortable')
            ->add('email')
            ->add('dateDeMiseEnCirculation')
            ->add('dateAchat')
            ->add('dateDernierEvenement')
            ->add('libelleMarque')
            ->add('libelleModele')
            ->add('version')
            ->add('vin')
            ->add('immatriculation')
            ->add('typeDeProspect')
            ->add('kilometrage')
            ->add('libelleEnergie')
            ->add('vendeurVn')
            ->add('vendeurVo')
            ->add('commentaireDeFacturation')
            ->add('typeVnVo')
            ->add('numeroDeDossierVnVo')
            ->add('intermediaireDeVenteVn')
            ->add('dateEvenement')
            ->add('origineEvenement')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
            'csrf_protection' => false,
        ]);
    }
}

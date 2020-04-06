<?php

namespace App\Form;

use App\Entity\Producteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProducteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('raisonSociale')
            ->add('nomResponsable')
            ->add('prenomResponsable')
            ->add('adresseProducteur')
            ->add('cpProducteur')
            ->add('villeProducteur')
            ->add('telFixeProducteur')
            ->add('telPortProducteur')
            ->add('actif')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Producteur::class,
        ]);
    }
}

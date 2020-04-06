<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('groupe')
            ->add('adresse')
            ->add('ville')
            ->add('CP')
            ->add('telFixe')
            ->add('telPort1')
            ->add('telPort2')
            ->add('email')
            ->add('actif')
            ->add('identifiant')
            ->add('password')
            ->add('charteAcceptee')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

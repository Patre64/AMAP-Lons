<?php

namespace App\Form;

use App\Entity\Contrats;
use App\Entity\Produit;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class ContratsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('etat')
            ->add('User', EntityType::class, [

                // looks for choices from this entity
                'class' => User::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'nom',
            
                // used to render a select box, check boxes or radios
                // 'expanded' => true,)
                ])

            ->add('produits', EntityType::class, [

                // looks for choices from this entity
                'class' => Produit::class,
            
                // uses the User.username property as the visible option string
                'choice_label' => 'nom',
            
                // used to render a select box, check boxes or radios
                'multiple' => true
                // 'expanded' => true,)
                ]);

            
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contrats::class,
        ]);
    }
}

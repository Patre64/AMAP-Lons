<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('unite')
            ->add('quantiteMin')
            ->add('prix')
            ->add('nbcheque')
            ->add('nombreDeDistribution')
            ->add('nombreDeLivraisonsRestantes')
            ->add('periodeDebut')
            ->add('periodeFin')
            ->add('actif')
            ->add('periodicite')
            ->add('categorie', EntityType::class, array(
                'class' => Categorie::class,
                'choice_label' => function($Categorie){
                    return $Categorie -> getNom();
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}

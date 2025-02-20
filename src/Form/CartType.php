<?php

namespace App\Form;

use App\Entity\Cart;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('albumId', HiddenType::class) // Stocker l'ID de l'album
            ->add('type', ChoiceType::class, [ // Choix entre Vinyle et CD
                'choices' => [
                    'Vinyle' => 'vinyl',
                    'CD' => 'cd',
                ],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('quantity', IntegerType::class, [ // Nombre d'unités
                'attr' => [
                    'min' => 1,
                    'value' => 1,
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cart::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\OrderItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CartItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantity')
            ->add('size', ChoiceType::class, [
                'choices'  => [
                    'XS' => 'xs',
                    'S' => 's',
                    'M' => 'm',
                    'L' => 'l',
                    'XL' => 'xl',
                    'XXL' => 'xxl',
                ],
            ])
            ->add('color', ChoiceType::class, [
                'choices'  => [
                    'White' => 'white',
                    'Black' => 'black',
                    'Red' => 'Red',
                    'Green' => 'Green',
                    'Blue' => 'Blue',
                ],
            ])
            ->add('remove', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OrderItem::class,
        ]);
    }
}

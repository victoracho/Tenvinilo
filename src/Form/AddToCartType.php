<?php

namespace App\Form;

use App\Entity\OrderItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AddToCartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quantity');
        $builder->add('color', ChoiceType::class, [
            'choices'  => [
                'White' => 'white',
                'Black' => 'black',
                'Red' => 'Red',
                'Green' => 'Green',
                'Blue' => 'Blue',
            ],
        ]);

        $builder->add('size', ChoiceType::class, [
            'choices'  => [
                'XS' => 'xs',
                'S' => 's',
                'M' => 'm',
                'L' => 'l',
                'XL' => 'xl',
                'XXL' => 'xxl',
            ],
        ]);


        $builder->add('add', SubmitType::class, [
            'label' => 'Add to cart',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => OrderItem::class,
        ]);
    }
}

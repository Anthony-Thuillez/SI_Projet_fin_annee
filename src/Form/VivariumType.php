<?php

namespace App\Form;

use App\Entity\Vivarium;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VivariumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('size')
            ->add('pressure')
            ->add('temperature')
            ->add('atmosphere')
            ->add('price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vivarium::class,
        ]);
    }
}

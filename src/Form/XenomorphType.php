<?php

namespace App\Form;

use App\Entity\Xenomorph;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class XenomorphType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('price')
            ->add('img_src')
            ->add('img_alt')
            ->add('size')
            ->add('feeding')
            ->add('dangerous')
            ->add('available')
            ->add('type')
            ->add('pressure')
            ->add('temperature')
            ->add('atmosphere')
            ->add('atmoshpere_value')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Xenomorph::class,
        ]);
    }
}

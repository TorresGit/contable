<?php

namespace Amd\PiperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IngrerutType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('rut')
        ->add('nombre')
        ->add('direccion')
        ->add('comuna')
        ->add('ciudad')
        ->add('encargado')
        ->add('giro')
        ->add('fono')
        ->add('celular')
        ->add('email')
        ->add('codpostal')
        ->add('formapago')
        ->add('empleado')
        ->add('cliente')
        ->add('proveedor')
        ->add('honorarios')
        ->add('ctare')
        ->add('flujo')
        ->add('item')
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Amd\PiperBundle\Entity\Ingrerut'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'amd_piperbundle_ingrerut';
    }


}

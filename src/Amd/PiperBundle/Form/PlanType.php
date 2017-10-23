<?php

namespace Amd\PiperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlanType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('numcuenta')
        ->add('descripcion')
        ->add('presup')
        ->add('informe')
        ->add('exento')
        ->add('afecto')
        ->add('iva')
        ->add('ivat')
        ->add('impesp')
        ->add('rethon')
        ->add('arut')
        ->add('oprcredit')
        ->add('concilia')
        ->add('flujo')
        ->add('ccosto')
        ->add('item')
        ->add('grafica')
        ->add('aproyecto')
        ->add('tesorero')
        ->add('egresos')
        ->add('rinicio')
        ->add('rfin')
        ->add('cmdifcamdio')
        ->add('cmctasresul')
        ->add('contradifcam')
        ->add('ctaresul')
        ->add('Empresa')
        ->add('Balc')
        
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Amd\PiperBundle\Entity\Plan'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'amd_piperbundle_plan';
    }


}

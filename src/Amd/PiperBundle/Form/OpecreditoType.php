<?php

namespace Amd\PiperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpecreditoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codoperacion')
        ->add('descripcion')
        ->add('fecha')
        ->add('monto')
        ->add('numcuotas')
        ->add('okvigente')
        ->add('Banco')
        
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Amd\PiperBundle\Entity\Opecredito'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'amd_piperbundle_opecredito';
    }


}

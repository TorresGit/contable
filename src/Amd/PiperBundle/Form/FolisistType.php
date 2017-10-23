<?php

namespace Amd\PiperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FolisistType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('fecha')
        ->add('codcompra')
        ->add('entidad')
        ->add('opetesore')
        ->add('ivacredito')
        ->add('proveedores')
        ->add('retimphon')
        ->add('honorarios')
        ->add('ivadebito')
        ->add('cliente')
        ->add('ivaretenido')
        ->add('bancocheques')
        ->add('nopedido')
        ->add('nofactura')
        ->add('Empresa');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Amd\PiperBundle\Entity\Folisist'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'amd_piperbundle_folisist';
    }


}

<?php

namespace Amd\PiperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class CaractType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('empleado', CheckboxType::class, array(
                     'label'    => 'Empleado',
                     'required' => false,
                     ))
                ->add('cliente', CheckboxType::class, array(
                     'label'    => 'Cliente',
                     'required' => false,
                     ))
                ->add('proveedor', CheckboxType::class, array(
                     'label'    => 'Proveedor',
                     'required' => false,
                     ))
                ->add('honorarios', CheckboxType::class, array(
                     'label'    => 'Honorarios',
                     'required' => false,
                     ))               
        
        
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Amd\PiperBundle\Entity\Caract'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'amd_piperbundle_caract';
    }


}

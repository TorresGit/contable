<?php

namespace Amd\PiperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ContabilizarType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ctare', CheckboxType::class, array(
                     'label'    => 'Cta.Resultado',
                     'required' => false,
                     ))
                ->add('flujo', CheckboxType::class, array(
                     'label'    => 'Flujo',
                     'required' => false,
                     ))
                ->add('item', CheckboxType::class, array(
                     'label'    => 'Item',
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
            'data_class' => 'Amd\PiperBundle\Entity\Contabilizar'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'amd_piperbundle_contabilizar';
    }


}

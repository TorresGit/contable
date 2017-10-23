<?php

namespace Amd\PiperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class EmpresaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('rut')
        ->add('nombre')
        ->add('dedica')
        ->add('direccion')
        ->add('email')
        ->add('fono')
        ->add('correlativo')
        ->add('sitadminproye')
        ->add('rutre')
        ->add('nombrere')
        ->add('direccionre')
        ->add('cellre')
        ->add('centro', CheckboxType::class, array(
                     'label'    => 'Ok.Centro',
                     'required' => false,
                     ))
        ->add('flujo', CheckboxType::class, array(
                     'label'    => 'Ok.Flujo',
                     'required' => false,
                     ))
        ->add('item', CheckboxType::class, array(
                     'label'    => 'Ok.Item',
                     'required' => false,
                     ))
        ->add('rutac', CheckboxType::class, array(
                     'label'    => 'Ok.Rut',
                     'required' => false,
                     ))
        ->add('td1', CheckboxType::class, array(
                     'label'    => 'Ok.Td1',
                     'required' => false,
                     ))
        ->add('doc1', CheckboxType::class, array(
                     'label'    => 'Ok.Doc1',
                     'required' => false,
                     ))
        ->add('td2', CheckboxType::class, array(
                     'label'    => 'Ok.Td2',
                     'required' => false,
                     ))
        ->add('doc2', CheckboxType::class, array(
                     'label'    => 'Ok.Doc2',
                     'required' => false,
                     ))
        ->add('proyec', CheckboxType::class, array(
                     'label'    => 'Ok.Poyecto',
                     'required' => false,
                     ))
        ->add('fecven', CheckboxType::class, array(
                     'label'    => 'OK:Fec.Ven',
                     'required' => false,
                     ))
        ->add('glolin', CheckboxType::class, array(
                     'label'    => 'OK.Glo.Lin',
                     'required' => false,
                     ))
        ->add('vouegre', CheckboxType::class, array(
                     'label'    => 'OK.Vou.Egr',
                     'required' => false,
                     )) 

        ->add('vouhono', CheckboxType::class, array(
                     'label'    => 'OK.Vou.Hono',
                     'required' => false,
                     ))
         ->add('voucomp', CheckboxType::class, array(
                     'label'    => 'OK.Vou.Com',
                     'required' => false,
                     ))
        ->add('vouven', CheckboxType::class, array(
                     'label'    => 'OK.Vou.Ven',
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
            'data_class' => 'Amd\PiperBundle\Entity\Empresa'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'amd_piperbundle_empresa';
    }


}

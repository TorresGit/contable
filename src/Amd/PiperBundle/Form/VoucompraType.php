<?php

namespace Amd\PiperBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class VoucompraType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('fecha', 'date', array(
                    "label" => "Fecha ",
                    "widget" => "single_text",
                    "format" => "yyyy-MM-dd",
                    //"read_only" => true,
                    "attr" => array('class' => 'validate[required,custom[date]] form-control datepicker')
                
                ))
                ->add('detalle',null, array(
                    'label' => 'Detalle',
                    'attr' => array( 'class' => 'form-control validate[required] select', 'data-live-search' => 'true')
                    ))
                
                ->add('numdocu',null, array(
                    'label' => 'Doc1:', "required" => true,
                    'attr' => array('placeholder' => 'Doc1...',
                                    'class' => 'form-control validate[required] select', 'data-live-search' => 'true')))
                
                ->add('fechaven', 'date', array(
                    "label" => "Fecha.Ven ",
                    "widget" => "single_text",
                    "format" => "yyyy-MM-dd",
                  //  "read_only" => true,
                    "attr" => array('class' => 'validate[required,custom[date]] form-control datepicker')
                
                ))
                ->add('fecharecep', 'date', array(
                    "label" => "Fecha.Recep ",
                    "widget" => "single_text",
                    "format" => "yyyy-MM-dd",
                   // "read_only" => true,
                    "attr" => array('class' => 'validate[required,custom[date]] form-control datepicker')
                
                ))
                ->add('debe','text', array(
                    'label' => 'Debe',
                    'attr' => array( 'class' => 'form-control validate[required] select', 'data-live-search' => 'true')
                    ))

                ->add('haber','text', array(
                    'label' => 'Haber',
                    'attr' => array( 'class' => 'form-control validate[required] select', 'data-live-search' => 'true')
                    ))

                ->add('saldo','text', array(
                    'label' => 'Saldo',
                    'attr' => array( 'class' => 'form-control validate[required] select', 'data-live-search' => 'true')
                    ))

                ->add('numoreden','text', array(
                    'label' => 'Doc1',
                    'attr' => array( 'class' => 'form-control validate[required] select', 'data-live-search' => 'true')
                    ))
                
                
                ->add('Tipovou',null,
                    array( 'required' => true,
                           'label' => 'Documento',
                           'attr' => array( 'class' => 'form-control validate[required] select', 'data-live-search' => 'true')))


//                        ->add('idtiposvoucher','entity',array(
////                        'class'=>'AmdPiperBundle:Tiposvoucher',
////                        'empty_value'=>'------------------------',
////                        'label'=>'Tipo'))

                

                 ->add('Plan','entity',array(
                        'class'=>'AmdPiperBundle:Plan',
                        'empty_value'=>'------------------------',
                        'label'=>'Proyecto Numero Cuenta',
                        'attr' => array(
                            'class' => 'form-control validate[required] select', 'data-live-search' => 'true'
    )
                       ))

             ->add('Ingrerut', 'entity', array(
                'class' => 'Amd\PiperBundle\Entity\Ingrerut',
                'empty_value' => 'Compra a',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control validate[required] select', 'data-live-search' => 'true'
                )
            ))


//                ->add(
//                      $builder->create('Ingrerut', 'form', array('by_reference' => false))
//                        ->add('Ingrerut','entity',array(
//                              'class'=>'AmdPiperBundle:Ingrerut',
//                              'empty_value'=>'------------------------',
//                              'label'=>'Compra a'))
//
//                                )
//

                           
                
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Amd\PiperBundle\Entity\Voucompra'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'amd_piperbundle_voucompra';
    }


}

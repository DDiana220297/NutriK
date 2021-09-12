<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PruebaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titulo', TextType::class, array("required" => "required", "attr" => array(
                    "class" => "form-titulo"
                )))
                ->add('descripcion', TextareaType::class)
//                ->add('precio', ChoiceType::class, array(
//                    "choices" => array(
//                       "hombre" => "hombre",
//                       "mujer" => "mujer"
//                    )
//                ))
                ->add('precio', CheckboxType::class, array(
                    "label" => "Mostrar precio",
                    "required" => true
                ))
                ->add('Guardar', SubmitType::class);

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Prueba'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_prueba';
    }


}

<?php

namespace CustomsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname', TextType::class, array("required" => "required", "attr" => array(
                "class" => "form-firstname form-control",
                "style" => "height:45px"
            )))
            ->add('lastname',TextType::class, array("required" => "required", "attr" => array(
                "class" => "form-lastname form-control",
                "style" => "height:45px"
            )))
            ->add('email',EmailType::class, array("required" => "required", "attr" => array(
                "class" => "form-email form-control",
                "style" => "height:45px"
            )))
            ->add('password',PasswordType::class, array("required" => "required", "attr" => array(
                "class" => "form-password form-control",
                "style" => "height:45px"
            )))
            ->add('Registrarse',SubmitType::class, array("attr" => array(
                "class" => "form-submit form-control",
                "style" => "font-weight: 500;
                            font-size: 1.5rem;
                            --text-opacity: 1;
                            color: #fff;
                            border-bottom-width: 4px;
                            --border-opacity: 1;
                            border-color: #00A295;
                            padding-left: .5rem;
                            padding-right: .5rem;
                            border-radius: .25rem;
                            position: relative;
                            background: linear-gradient(to bottom, #00766c 0%, #00A295 100%);
                            margin-top: 20px;
                            height:45px"
            )));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CustomsBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'customsbundle_user';
    }


}

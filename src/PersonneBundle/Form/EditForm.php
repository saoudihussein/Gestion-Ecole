<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 24/12/2020
 * Time: 2:39 PM
 */

namespace PersonneBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class EditForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cinPersonne', TextType::class)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('adresse', TextType::class)
            ->add('numTel', TextType::class)
            ->add('email', EmailType::class)
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Choisir le role ' => [
                        'Parent' => 'Parent',
                        'Maitre' => 'Maitre',
                    ]
                ],
                'attr' => ['class' => 'form-control']


            ])
            ->add('save', SubmitType::Class,array('label' =>'Confirmer'))
            ->getForm();
    }

    public function getName()
    {
        return 'Edit';
    }

}
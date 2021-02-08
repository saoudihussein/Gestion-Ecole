<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 02/01/2021
 * Time: 1:01 PM
 */

namespace PersonneBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('email', EmailType::class)
            ->add('MotDePasse', PasswordType::class)
            ->add('save', SubmitType::Class,array('label' =>'Se connecter'))
            ->getForm();
    }

    public function getName()
    {
        return 'login';
    }

}
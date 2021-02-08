<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 24/12/2020
 * Time: 2:39 PM
 */

namespace MatiereBundle\Form;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class MatiereForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class)
            ->add('coef', NumberType::class)
            ->add('cinMaitre', EntityType::class, array(
                'class' => 'PersonneBundle\Entity\Personne',
                'choice_label' => 'cinPersonne',
                'expanded' => false,
                'multiple' => false,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.role=:role')
                        ->setParameter('role', "Maitre");
                }
            ))

            ->add('save', SubmitType::Class,array('label' =>'Confirmer'))
            ->getForm();
    }

    public function getName()
    {
        return 'Eleve';
    }

}
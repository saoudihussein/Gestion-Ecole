<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 24/12/2020
 * Time: 2:39 PM
 */

namespace EleveBundle\Form;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class EleveForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('adresse', TextType::class)
            ->add('cinParent', EntityType::class, array(
                'class' => 'PersonneBundle\Entity\Personne',
                'choice_label' => 'cinPersonne',
                'expanded' => false,
                'multiple' => false,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                            ->where('u.role=:role')
                        ->setParameter('role', "Parent");
                }
            ))
            ->add('numClasse', EntityType::class, array(
                'class' => 'ClasseBundle\Entity\Classes',
                'choice_label' => 'numClasse',
                'expanded' => false,
                'multiple' => false
            ));
    }

    public function getName()
    {
        return 'Eleve';
    }

}
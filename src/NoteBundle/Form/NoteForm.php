<?php


namespace NoteBundle\Form;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NoteForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Note',TextType::class)
            ->add('numMat', EntityType::class, array(
        'class' => 'MatiereBundle\Entity\Matiere',
        'choice_label' => 'libelle',
        'expanded' => false,
        'multiple' => false,
    ))
        ->add('numEleve', EntityType::class, array(
            'class' => 'EleveBundle\Entity\Eleve',
            'choice_label' => 'numEleve',
            'expanded' => false,
            'multiple' => false
        ))
            ->add('num', EntityType::class, array(
                'class' => 'ClasseBundle\Entity\Classes',
                'choice_label' => 'libelle',
                'expanded' => false,
                'multiple' => false
            ))
            ->add('save', SubmitType::Class,array('label' =>'Confirmer'))
            ->getForm();
    }

    public function getName(){
        return 'Note';
    }
}
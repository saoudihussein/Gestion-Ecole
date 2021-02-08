<?php


namespace AbsenceBundle\Form;


use Doctrine\ORM\EntityRepository;
use EleveBundle\Entity\Eleve;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AbsenceForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateAbs',DateTimeType::class)
            ->add('num', EntityType::class, array(
        'class' => 'ClasseBundle\Entity\Classes',
        'choice_label' => 'libelle',
        'expanded' => false,
        'multiple' => false,
    ))
        ->add('numEleve', EntityType::Class, array(
            'class' => 'EleveBundle\Entity\Eleve',
            'placeholder' => 'Choisir le num Elève',
            'choice_label' => 'numEleve',
            'expanded' => false,
            'multiple' => false
        ))
            ->add('numMat', EntityType::class, array(
                'class' => 'MatiereBundle\Entity\Matiere',
                'choice_label' => 'libelle',
                'expanded' => false,
                'multiple' => false
            ))
            ->add('save', SubmitType::Class,array('label' =>'Confirmer'))
            ->getForm();
    }

    public function getName(){
        return 'Absence';
    }
}
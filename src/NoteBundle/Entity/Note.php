<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 24/12/2020
 * Time: 1:12 PM
 */

namespace NoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MatiereBundle\Entity\Matiere;
use PersonneBundle\Entity\Personne;


/**
 * @ORM\Entity
 */



class Note
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $numNote;
    /**
     * @ORM\Column(type="float")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="MatiereBundle\Entity\Matiere")
     * @ORM\JoinColumn(name="numMat", referencedColumnName="num_mat")
     */
    private $numMat;

    /**
     * @ORM\ManyToOne(targetEntity="EleveBundle\Entity\Eleve")
     * @ORM\JoinColumn(name="numEleve", referencedColumnName="num_eleve")
     */
    private $numEleve;

    /**
     * @return mixed
     */
    public function getNumNote()
    {
        return $this->numNote;
    }

    /**
     * @param mixed $numNote
     */
    public function setNumNote($numNote)
    {
        $this->numNote = $numNote;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getNumMat()
    {
        return $this->numMat;
    }

    /**
     * @param mixed $numMat
     */
    public function setNumMat($numMat)
    {
        $this->numMat = $numMat;
    }

    /**
     * @return mixed
     */
    public function getNumEleve()
    {
        return $this->numEleve;
    }

    /**
     * @param mixed $numEleve
     */
    public function setNumEleve($numEleve)
    {
        $this->numEleve = $numEleve;
    }



}
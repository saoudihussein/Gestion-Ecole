<?php


namespace AbsenceBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Absence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $numAbs;


    /**
     * @ORM\Column(type="string",length=20)
     */
    private $dateAbs;



    /**
     * @ORM\ManyToOne(targetEntity="ClasseBundle\Entity\Classes")
     * @ORM\JoinColumn(name="num", referencedColumnName="num", onDelete="CASCADE")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $num;

    /**
     * @ORM\ManyToOne(targetEntity="EleveBundle\Entity\Eleve")
     * @ORM\JoinColumn(name="numEleve", referencedColumnName="num_eleve",nullable=false, onDelete="CASCADE")
     */
    private $numEleve;

    /**
     * @ORM\ManyToOne(targetEntity="MatiereBundle\Entity\Matiere")
     * @ORM\JoinColumn(name="numMat", referencedColumnName="num_mat",nullable=false, onDelete="CASCADE")
     */
    private $numMat;

    /**
     * @return mixed
     */
    public function getNumAbs()
    {
        return $this->numAbs;
    }

    /**
     * @param mixed $numAbs
     */
    public function setNumAbs($numAbs)
    {
        $this->numAbs = $numAbs;
    }

    /**
     * @return mixed
     */
    public function getDateAbs()
    {
        return $this->dateAbs;
    }

    /**
     * @param mixed $dateAbs
     */
    public function setDateAbs($dateAbs)
    {
        $this->dateAbs = $dateAbs;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
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

    public function __toString()
    {
        return (string) $this->num;
    }
}
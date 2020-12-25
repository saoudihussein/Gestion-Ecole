<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 15/12/2020
 * Time: 10:19 PM
 */

namespace MatiereBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use EleveBundle\Entity\Eleve;


/**
 * @ORM\Entity
 */

class Matiere
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $numMat;

    /**
     * @ORM\Column(type="string",length=50)
     */
    private $libelle;

    /**
     * @ORM\Column(type="float")
     */
    private $coef;

    /**
     * @ORM\ManyToOne(targetEntity=PersonneBundle\Entity\Personne::class)
     * @ORM\JoinColumn(name="cinMaitre", referencedColumnName="cin_personne")
     */
    protected $cinMaitre;

    /**
     * @return mixed
     */
    public function getCinMaitre()
    {
        return $this->cinMaitre;
    }

    /**
     * @param mixed $cinMaitre
     */
    public function setCinMaitre($cinMaitre)
    {
        $this->cinMaitre = $cinMaitre;
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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getCoef()
    {
        return $this->coef;
    }

    /**
     * @param mixed $coef
     */
    public function setCoef($coef)
    {
        $this->coef = $coef;
    }





}
<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 15/12/2020
 * Time: 5:16 PM
 */



namespace EleveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MatiereBundle\Entity\Matiere;
use PersonneBundle\Entity\Personne;


/**
 * @ORM\Entity
 */

class Eleve
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */


    private $numEleve;

    /**
     * @ORM\Column(type="string",length=55)
     */
    private $nom;

    /**
     * @ORM\Column(type="string",length=55)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string",length=55)
     */
    private $adresse;

    /**
     * @return mixed
     */
    public function getNumClasse()
    {
        return $this->numClasse;
    }

    /**
     * @param mixed $numClasse
     */
    public function setNumClasse($numClasse)
    {
        $this->numClasse = $numClasse;
    }


    /**
     * @ORM\ManyToOne(targetEntity=PersonneBundle\Entity\Personne::class)
     * @ORM\JoinColumn(name="cinParent", referencedColumnName="cin_personne")
     */
        protected $cinParent;

    /**
     * @ORM\ManyToOne(targetEntity=ClasseBundle\Entity\Classes::class)
     * @ORM\JoinColumn(name="numClasse", referencedColumnName="num")
     */
    protected $numClasse;

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
     * @ORM\ManyToOne(targetEntity=ClasseBundle\Entity\Classes::class)
     * @ORM\JoinColumn(name="numClasse", referencedColumnName="num")
     */
    protected $num;

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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCinParent()
    {
        return $this->cinParent;
    }

    /**
     * @param mixed $cinParent
     */
    public function setCinParent($cinParent)
    {
        $this->cinParent = $cinParent;
    }







}
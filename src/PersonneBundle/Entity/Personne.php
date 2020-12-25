<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 15/12/2020
 * Time: 4:29 PM
 */

namespace PersonneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */



class Personne
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string",length=55)
     */
    private $cinPersonne;

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
     * @ORM\Column(type="string",length=8)
     */
    private $numTel;

    /**
     * @ORM\Column(type="string",length=55)
     */
    private $email;

    /**
     * @ORM\Column(type="string",length=55)
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="string",length=55)
     */
    private $role;



    /**
     * @return mixed
     */
    public function getCinPersonne()
    {
        return $this->cinPersonne;
    }

    /**
     * @param mixed $cinPersonne
     */
    public function setCinPersonne($cinPersonne)
    {
        $this->cinPersonne = $cinPersonne;
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
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param mixed $numTel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param mixed $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */

}
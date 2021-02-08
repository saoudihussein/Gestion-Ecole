<?php
/**
 * Created by PhpStorm.
 * User: HS-PC
 * Date: 15/12/2020
 * Time: 5:13 PM
 */

namespace ClasseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


class Classes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $num;

    /**
     * @return mixed
     */

    /**
     * @ORM\Column(type="string",length=8)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string",length=8)
     */
    private $capacite;

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
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * @param mixed $capacite
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;
    }





}
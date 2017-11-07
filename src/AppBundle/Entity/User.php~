<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 07/11/17
 * Time: 22:28
 */
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="GameBundle\Entity\Faction", mappedBy="user")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $faction;

    /**
     * @ORM\OneToOne(targetEntity="GameBundle\Entity\Classe", mappedBy="user")
     */
    protected $classe;

    /**
     * @ORM\Column(name="lvl", type="integer")
     */
    private $lvl;

    /**
     * @ORM\Column(name="exp", type="integer")
     */
    private $exp;

    /**
     * @ORM\Column(name="life", type="integer")
     */
    private $life;

    /**
     * @ORM\Column(name="chakra", type="integer")
     */
    private $chakra;

    /**
     * @ORM\Column(name="tai", type="integer")
     */
    private $tai;

    /**
     * @ORM\Column(name="nin", type="integer")
     */
    private $nin;

    /**
     * @ORM\Column(name="gen", type="integer")
     */
    private $gen;


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set lvl
     *
     * @param integer $lvl
     *
     * @return User
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     *
     * @return User
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return integer
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set life
     *
     * @param integer $life
     *
     * @return User
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get life
     *
     * @return integer
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set chakra
     *
     * @param integer $chakra
     *
     * @return User
     */
    public function setChakra($chakra)
    {
        $this->chakra = $chakra;

        return $this;
    }

    /**
     * Get chakra
     *
     * @return integer
     */
    public function getChakra()
    {
        return $this->chakra;
    }

    /**
     * Set tai
     *
     * @param integer $tai
     *
     * @return User
     */
    public function setTai($tai)
    {
        $this->tai = $tai;

        return $this;
    }

    /**
     * Get tai
     *
     * @return integer
     */
    public function getTai()
    {
        return $this->tai;
    }

    /**
     * Set nin
     *
     * @param integer $nin
     *
     * @return User
     */
    public function setNin($nin)
    {
        $this->nin = $nin;

        return $this;
    }

    /**
     * Get nin
     *
     * @return integer
     */
    public function getNin()
    {
        return $this->nin;
    }

    /**
     * Set gen
     *
     * @param integer $gen
     *
     * @return User
     */
    public function setGen($gen)
    {
        $this->gen = $gen;

        return $this;
    }

    /**
     * Get gen
     *
     * @return integer
     */
    public function getGen()
    {
        return $this->gen;
    }

    /**
     * Set faction
     *
     * @param \GameBundle\Entity\Faction $faction
     *
     * @return User
     */
    public function setFaction(\GameBundle\Entity\Faction $faction)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get faction
     *
     * @return \GameBundle\Entity\Faction
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Get class
     *
     * @return \GameBundle\Entity\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set classe
     *
     * @param \GameBundle\Entity\Classe $classe
     *
     * @return User
     */
    public function setClasse(\GameBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;

        return $this;
    }
}

<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 2014-03-29
 * Time: 6:02 PM
 */

namespace Cubbyhole\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Plan implements PlanInterface {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer (seconds)
     *
     * @ORM\Column(name="duration", type="integer", length=10)
     */
    private $duration;

    /**
     * @var integer (kilo-octets 1G GB = 1000000 KO)
     *
     * @ORM\Column(name="space", type="integer", length=12)
     */
    private $space;

    /**
     * @var integer (kilo-octets 1 GB = 1000000 KO)
     *
     * @ORM\Column(name="bandwidth", type="integer", length=12)
     */
    private $bandwidth;

    /**
     * @var User
     *
     * @ORM\OneToMany(targetEntity="Cubbyhole\ApiBundle\Entity\User", mappedBy="plan")
     */
    private $users;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {

        return $this->id;

    }

    /**
     * Set name
     *
     * @param string $name
     * @return Plan
     */
    public function setName($name) {

        $this->name = $name;
        return $this;

    }

    /**
     * Get name
     *
     * @return Plan
     */
    public function getName() {

        return $this->name;

    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Plan
     */
    public function setDuration($duration) {

        $this->duration = $duration;
        return $this;

    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration() {

        return $this->duration;

    }

    /**
     * Set space
     *
     * @param integer $space
     * @return Plan
     */
    public function setSpace($space) {

        $this->space = $space;
        return $this;

    }

    /**
     * Get space
     *
     * @return integer
     */
    public function getSpace() {

        return $this->space;

    }

    /**
     * Set bandwidth
     *
     * @param integer $bandwidth
     * @return Plan
     */
    public function setBandwidth($bandwidth) {

        $this->bandwidth = $bandwidth;
        return $this;

    }

    /**
     * Get bandwidth
     *
     * @return integer
     */
    public function getBandwidth() {

        return $this->bandwidth;

    }

    public function getUsers() {

        return $this->users;

    }

}
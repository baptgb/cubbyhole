<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 2014-05-14
 * Time: 11:58 AM
 */

namespace Cubbyhole\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directory
 *
 * @ORM\Table(name="Directories")
 * @ORM\Entity
 */
class Directory implements DirectoryInterface {

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
     *
     * @ORM\ManyToOne(targetEntity="Cubbyhole\ApiBundle\Entity\User", inversedBy="directories")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $owner; // OK


    /**
     * @var File
     *
     * @ORM\OneToMany(targetEntity="Cubbyhole\ApiBundle\Entity\File", mappedBy="directory")
     */
    private $files; // OK

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function getFiles()
    {
        return $this->files;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setOwner(User $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

}
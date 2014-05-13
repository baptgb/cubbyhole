<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 2014-05-09
 * Time: 6:41 PM
 */

namespace Cubbyhole\ApiBundle\Entity;


class File implements FileInterface {

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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    // TODO:find how to save the data (format, file sys methods and implementation, etc...
    private $data;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Cubbyhole\ApiBundle\Entity\User", inversedBy="files")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $owner;

    /**
     * @var integer (kilo-octets 1G GB = 1000000 KO)
     *
     * @ORM\Column(name="size", type="integer", length=12)
     */
    private $size;

    /**
     * @var datetime
     *
     * @ORM\Column(type="datetime")
     */
    private $creation;

    /**
     * @var datetime
     *
     * @ORM\Column(type="datetime")
     */
    private $modification;

    private $readOnlyUsers = Array();

    private $readWriteUsers = Array();

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function getSize() {
        return $this->size;
    }

    public function getCreation() {
        return $this->creation;
    }

    public function getModification() {
        return $this->modification;
    }

    public function getReadOnlyUsers()
    {
        return $this->readOnlyUsers;
    }

    public function getReadWriteUsers()
    {
        return $this->readWriteUsers;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setData($data)
    {
        // TODO: Implement setData() method.
    }

    public function setOwner(User $user)
    {
        $this->owner = $user;
        return $this;
    }

    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    public function setCreation($creation) {
        $this->creation = $creation;
        return $this;
    }

    public function setmodification($modification) {
        $this->modification = $modification;
        return $this;
    }

    public function addReadOnlyUser(User $user)
    {
        $this->readOnlyUsers[] = $user->getId();
        return $this;
    }

    public function removeReadOnlyUser(User $user)
    {
        if ($key = array_search($user->getId(), $this->readOnlyUsers)) {
            unset($this->readOnlyUsers[$key]);
        } else {
            return false;
        }
    }

    public function addReadWriteUser(User $user)
    {
        $this->readWriteUsers[] = $user->getId();
        return $this;
    }

    public function removeReadWriteUser(User $user)
    {
        if ($key = array_search($user->getId(), $this->readWriteUsers)) {
            unset($this->readWriteUsers[$key]);
            return true;
        } else {
            return false;
        }
    }
}
<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 2014-05-09
 * Time: 6:41 PM
 */

/*namespace Cubbyhole\ApiBundle\Entity;


class File implements FileInterface {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    //private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    //private $name;

    // TODO:find how to save the data (format, file sys methods and implementation, etc...
    //private $data;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Cubbyhole\ApiBundle\Entity\User", inversedBy="files")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    /*private $owner;

    private $size;

    private $readOnlyUsers = Array();

    private $adminUsers = Array();

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

    public function getReadOnlyUsers()
    {
        return $this->readOnlyUsers;
    }

    public function getAdminUsers()
    {
        return $this->adminUsers;
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

    public function addAdminUser(User $user)
    {
        $this->adminUsers[] = $user->getId();
        return $this;
    }

    public function removeAdminUser(User $user)
    {
        if ($key = array_search($user->getId(), $this->adminUsers)) {
            unset($this->adminUsers[$key]);
            return true;
        } else {
            return false;
        }
    }
}*/
<?php

namespace Cubbyhole\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(
 *      name="Users",
 *      uniqueConstraints={
 *          @ORM\UniqueConstraint(name="user_unique",columns={
 *              "username",
 *              "email"
 *          })
 *      }
 * )
 * @ORM\Entity
 */
class User implements UserInterface
{
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
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Cubbyhole\ApiBundle\Entity\Plan", inversedBy="users")
     * @ORM\JoinColumn(name="plan_id", referencedColumnName="id")
     */
    private $plan; // OK

    /**
     * @var User
     *
     * @ORM\OneToMany(targetEntity="Cubbyhole\ApiBundle\Entity\Directory", mappedBy="owner")
     */
    private $directories; // OK TODO: see how to implement the array and add and remove methods

    /**
     * @var User
     *
     * @ORM\OneToMany(targetEntity="Cubbyhole\ApiBundle\Entity\File", mappedBy="owner")
     */
    private $files;

    /**
     * @ORM\ManyToMany(targetEntity="Cubbyhole\ApiBundle\Entity\File", mappedBy="readOnlyUsers")
     */
    private $readOnlyFiles;

    /**
     * @ORM\ManyToMany(targetEntity="Cubbyhole\ApiBundle\Entity\File", mappedBy="readWriteUsers")
     */
    private $readWriteFiles;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set plan
     *
     * @param Plan $plan
     * @return User
     */
    public function setPlan(Plan $plan) {

        $this->plan = $plan;
        return $this;

    }

    /**
     * Get plan
     *
     * @return Plan
     */
    public function getPlan() {

        return $this->plan;

    }

    /**
     * Get plan
     *
     * @return Plan
     */
    public function getDirectories() {

        return $this->directories;

    }

}

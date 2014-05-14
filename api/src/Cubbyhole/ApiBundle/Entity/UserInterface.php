<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 3/19/2014
 * Time: 2:39 PM
 */

namespace Cubbyhole\ApiBundle\Entity;


interface UserInterface {

    public function getId();
    public function getFirstname();
    public function getLastname();
    public function getUsername();
    public function getEmail();
    public function getPassword();
    public function getPlan();
    public function getDirectories();
    public function setFirstname($firstname);
    public function setLastname($lastname);
    public function setUsername($username);
    public function setEmail($email);
    public function setPassword($password);
    public function setPlan(Plan $plan);

} 
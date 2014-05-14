<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 2014-05-14
 * Time: 11:58 AM
 */

namespace Cubbyhole\ApiBundle\Entity;


interface DirectoryInterface {

    public function getId();
    public function getName();
    public function getOwner();
    public function getFiles();
    public function getLocation();
    public function setName($name);
    public function setOwner(User $owner);
    public function setLocation($location);

} 
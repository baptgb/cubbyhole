<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 2014-05-09
 * Time: 6:41 PM
 */

namespace Cubbyhole\ApiBundle\Entity;


interface FileInterface {

    public function getId();
    public function getName();
    public function getData();
    public function getOwner();
    public function getSize();
    public function getCreation();
    public function getModification();
    public function getReadOnlyUsers();
    public function getReadWriteUsers();
    public function setName($name);
    public function setData($data);
    public function setOwner(User $user);
    public function setSize($size);
    public function setCreation($creationDate);
    public function setModification($modification);
    public function addReadOnlyUser(User $user);
    public function removeReadOnlyUser(User $user);
    public function addReadWriteUser(User $user);
    public function removeReadWriteUser(User $user);

} 
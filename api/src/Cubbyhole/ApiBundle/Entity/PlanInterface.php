<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 2014-03-29
 * Time: 6:03 PM
 */

namespace Cubbyhole\ApiBundle\Entity;


interface PlanInterface {

    public function getId();
    public function getName();
    public function getDuration();
    public function getSpace();
    public function getBandwidth();
    public function setName($name);
    public function setDuration($duration);
    public function setSpace($space);
    public function setBandwidth($bandwidth);

} 
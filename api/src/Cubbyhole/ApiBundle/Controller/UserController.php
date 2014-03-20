<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 3/19/2014
 * Time: 2:04 PM
 */

namespace Cubbyhole\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;

class UserController extends FOSRestController {

    /**
     * @param $id
     * @return mixed
     * @View()
     */
    public function getUserAction($id) {

        $user = $this->container->get('doctrine.orm.entity_manager')->getRepository('CubbyholeApiBundle:User')->find($id);

        return $user;

    }

    /**
     * @return mixed
     * @View()
     */
    public function getUsersAction() {

        $users = $this->container->get('doctrine.orm.entity_manager')->getRepository('CubbyholeApiBundle:User')->findAll();

        return $users;

    }



}
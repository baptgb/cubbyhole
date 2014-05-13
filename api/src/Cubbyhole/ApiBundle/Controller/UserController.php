<?php
/**
 * Package: api
 * Author: Baptiste Gouby
 * Date: 3/19/2014
 * Time: 2:04 PM
 */

namespace Cubbyhole\ApiBundle\Controller;

use Cubbyhole\ApiBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends FOSRestController {

    /**
     * @param $id
     * @return mixed
     * @View()
     */
    public function getUserAction($id) {


        $em = $this->container->get('doctrine.orm.entity_manager');
        $user = $repository = $em->getRepository('CubbyholeApiBundle:User')->find($id);

        if ($user) {

            return $user;

        } else return new Response("User not found", 404);

    }

    /**
     * @return mixed
     * @View()
     */
    public function getUsersAction() {

        $em = $this->container->get('doctrine.orm.entity_manager');

        $users = $em->getRepository('CubbyholeApiBundle:User')->findAll();

        if ($users) {

            return $users;

        } else return new Response("No user found", 404);

    }

    /**
     * @param Request $request
     * @api-param username
     * @api-param email
     * @api-param password
     * @api-param-example {"username":"MyUser", "password": "MyPwd", "email": "MyEmail" }
     * @View()
     */
    public function postUserAction(Request $request)
    {
        $params = $request->request->all();
        if (
               array_key_exists("username", $params)
            && array_key_exists("email", $params)
            && array_key_exists("password", $params)
        ) {

            try {

                $em = $this->container->get('doctrine.orm.entity_manager');

                $basicPlan = $em->getRepository('CubbyholeApiBundle:Plan')->find(1);

                $user = new User();
                $user->setUsername($params["username"])
                    ->setEmail($params["email"])
                    ->setPassword(sha1($params['password']))
                    ->setPlan($basicPlan);

                $em->persist($user);
                $em->flush();

                return new Response("User created", 201);

            } catch (\Exception $e) {
                return new Response("Something went wrong", 500);
            }

        } else return new Response("Bad parameters", 404);
    }

    /**
     * @param Request $request
     * @param $id
     * @api-param username
     * @api-param firstname
     * @api-param lastname
     * @api-param email
     * @api-param password
     * @return Response
     * @View()
     */
    public function putUserAction(Request $request, $id) {

        $params = $request->request->all();

        $em = $this->container->get('doctrine.orm.entity_manager');
        $user = $em->getRepository('CubbyholeApiBundle:User')->find($id);

        if ($user) {

            if (array_key_exists("username", $params))   $user->setUsername($params["username"]);
            if (array_key_exists("firstname", $params))  $user->setFirstname($params["firstname"]);
            if (array_key_exists("lastname", $params))   $user->setLastname($params["lastname"]);
            if (array_key_exists("email", $params))      $user->setEmail($params["email"]);
            if (array_key_exists("password", $params))   $user->setPassword($params["password"]);

            try {

                $em->flush();

            } catch (\Exception $e) {
                return new Response("Something went wrong", 500);
            }

            return new Response("User updated", 200);

        } else return new Response("User not found", 404);

    }

    /**
     * @param $id
     * @return Response
     */
    public function deleteUserAction($id) {

        $em = $this->container->get('doctrine.orm.entity_manager');
        $user = $em->getRepository('CubbyholeApiBundle:User')->find($id);

        if ($user) {

            try {

                $em->remove($user);
                $em->flush();

            } catch (\Exception $e) {
                return new Response("Something went wrong", 500);
            }

            return new Response("User deleted", 200);

        } else return new Response("User not found", 404);

    }

}
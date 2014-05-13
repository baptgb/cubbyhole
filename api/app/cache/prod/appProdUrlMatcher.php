<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/api/v1/users')) {
            // api_1_get_user
            if (preg_match('#^/api/v1/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_1_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_1_get_user')), array (  '_controller' => 'Cubbyhole\\ApiBundle\\Controller\\UserController::getUserAction',  '_format' => NULL,));
            }
            not_api_1_get_user:

            // api_1_get_users
            if (preg_match('#^/api/v1/users(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_1_get_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_1_get_users')), array (  '_controller' => 'Cubbyhole\\ApiBundle\\Controller\\UserController::getUsersAction',  '_format' => NULL,));
            }
            not_api_1_get_users:

            // api_1_post_user
            if (preg_match('#^/api/v1/users(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_1_post_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_1_post_user')), array (  '_controller' => 'Cubbyhole\\ApiBundle\\Controller\\UserController::postUserAction',  '_format' => NULL,));
            }
            not_api_1_post_user:

            // api_1_put_user
            if (preg_match('#^/api/v1/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_api_1_put_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_1_put_user')), array (  '_controller' => 'Cubbyhole\\ApiBundle\\Controller\\UserController::putUserAction',  '_format' => NULL,));
            }
            not_api_1_put_user:

            // api_1_delete_user
            if (preg_match('#^/api/v1/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_api_1_delete_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_1_delete_user')), array (  '_controller' => 'Cubbyhole\\ApiBundle\\Controller\\UserController::deleteUserAction',  '_format' => NULL,));
            }
            not_api_1_delete_user:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

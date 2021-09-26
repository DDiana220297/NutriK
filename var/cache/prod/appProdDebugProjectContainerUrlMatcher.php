<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // customs_homepage
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'CustomsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'customs_homepage',);
        }

        // helloWorld
        if ('/hello-world' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::helloWorldAction',  '_route' => 'helloWorld',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'CustomsBundle\\Controller\\AuthController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return ['_route' => 'login_check'];
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return ['_route' => 'logout'];
        }

        // register
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'CustomsBundle\\Controller\\AuthController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/pruebas')) {
            // pruebas_form
            if ('/pruebas/form' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::formAction',  '_route' => 'pruebas_form',);
            }

            // pruebas_create
            if ('/pruebas/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PruebasController::addAction',  '_route' => 'pruebas_create',);
            }

            // pruebas_validate
            if (0 === strpos($pathinfo, '/pruebas/validarEmail') && preg_match('#^/pruebas/validarEmail/(?P<email>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'pruebas_validate']), array (  '_controller' => 'AppBundle\\Controller\\PruebasController::validarEmailAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

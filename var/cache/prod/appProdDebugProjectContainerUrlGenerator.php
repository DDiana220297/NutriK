<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'customer_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_didactic_content' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::didacticContentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/content',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customer_services' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomerBundle\\Controller\\CustomerController::servicesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/services',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'customs_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomsBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomsBundle\\Controller\\AuthController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomsBundle\\Controller\\AuthController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fullloginpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CustomsBundle\\Controller\\AuthController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginpage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pruebas/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pruebas/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_validate' => array (  0 =>   array (    0 => 'email',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::validarEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    1 =>     array (      0 => 'text',      1 => '/pruebas/validarEmail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'helloWorld' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::helloWorldAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello-world',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

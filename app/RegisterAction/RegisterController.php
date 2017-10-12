<?php

namespace App\RegisterAction;

use Slim\Http\Request;
use Slim\Http\Response;
use Psr\Container\ContainerInterface;

/**
 * [Class RegisterController -> Différentes actions de l'index]
 *
 * @package
 * @author
 * @license
 * @link
 */
class RegisterController
{
    
    /**
     * [__construct description]
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    /**
     * [__invoke description]
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function __invoke(Request $request, Response $response, array $args) : Response
    {
    
        return $this->container->view->render($response, 'register.twig');
    }
}
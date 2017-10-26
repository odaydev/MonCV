<?php

namespace App\IndexAction;

use Slim\Http\Request;
use Slim\Http\Response;
use Psr\Container\ContainerInterface;
use Illuminate\Database\Query\Builder;

/**
 * [Class IndexController -> Différentes actions de l'index]
 *
 * @package
 * @author
 * @license
 * @link
 */
class IndexController
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
    
        // var_dump($this->container->router->get('/')); die();
        return $this->container->view->render($response, 'index.twig');
    }
}

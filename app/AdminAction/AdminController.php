<?php

namespace App\AdminAction;

use Slim\Http\Request;
use Slim\Http\Response;
use Psr\Container\ContainerInterface;

/**
 * 
 */
class AdminController
{
    
    protected $container;
   
    public function __construct(ContainerInterface $container) 
    {
        $this->container = $container;
    }
    
    /**
     * [__invoke description]
     *
     * @param  Request  $request  [description]
     * @param  Response $response [description]
     * @param  array    $args     [description]
     * @return Response            [description]
     */
    
    public function __invoke(Request $request, Response $response, array $args) : Response
    {
    
        return $this->container->renderer->render($response, 'layout.phtml', array('bodyParse' => 'admin.phtml'));
    }

}

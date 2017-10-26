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
    
        $fb = $this->container->fb;

        $helper = $fb->getRedirectLoginHelper();

        //$permissions = ['email']; // Optional permissions
        $loginUrl = $helper->getLoginUrl('http://localhost:8080/public/include/fb-callback.php');
        // $loginUrl = htmlspecialchars($loginUrl);
        // var_dump($loginUrl); die();

       

        return $this->container->view->render($response, 'register.twig', array('FBloginUrl' => $loginUrl, 'GloginUrl' => $gLoginUrl));
    }
}

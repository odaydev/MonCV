<?php

// DIC configuration

$container = $app->getContainer();

//Facebook Connect
$container['fb'] = function ($c){

    $fb = new \Facebook\Facebook([
      'app_id' => '121679101854559',
      'app_secret' => '51dfe5420290036ecf98b7c0bccf73f3',
      'default_graph_version' => 'v2.10',
      //'default_access_token' => '{access-token}', // optional
    ]);

    return $fb;

};

// Instanciate PDO
$container['db'] = function ($c) {
    try {
        $pdo = new \PDO('mysql:host=localhost;dbname=moncv', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
};

//Instanciate Twig for Slim
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig('templates/', [
        'cache' => false//'path/to/cache'
    ]);

        // $settings = $c->get('settings');
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    // var_dump($c['router']); die();
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));

    return $view;
};

// view renderer
// $container['renderer'] = function ($c) {
//     $settings = $c->get('settings')['renderer'];
//     return new Slim\Views\PhpRenderer($settings['template_path']);
// };

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// Service factory for the ORM
$container['orm'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

<?php
/**
 * Created by PhpStorm.
 * User: raymond
 *
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();


$app['debug'] = true;
$app['request.http_port'] = 80;
$app['charset'] = 'UTF-8';
$app['locale'] = 'en';
$app['logger'] = null;

/*$app->get('/', function(){
    return "Hello world";
});*/


/*$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'dbname'   => 'symfony',
        'host'     => 'localhost',
        'user'     => 'root',
        'charset'  => 'utf8mb4-8',
        'port'     => 3306,
    ),
));*/

// echo ' hi';
$app->get('/', function(){
    return new Symfony\Component\HttpFoundation\Response("Hello world");
});

/*$app->get('/blog/{id}', function ($id) use ($app) {
    $sql = "SELECT * FROM posts WHERE id = ?";
    $post = $app['db']->fetchAssoc($sql, array((int) $id));

    return  "<h1>{$post['title']}</h1>".
    "<p>{$post['body']}</p>";
});*/


$app->run();

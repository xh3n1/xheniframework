<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$container = new \XheniFramework\Framework\DIContainer();
$container->registerClass(
    \XheniFramework\Framework\Services\IDataBaseService::class,
    \XheniFramework\Framework\Services\FutureDataBaseService::class);

$router = new \XheniFramework\Framework\Router(
    $_SERVER,
    $_POST,
    $_GET,
    $container
);


$router->route();
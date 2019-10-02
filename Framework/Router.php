<?php
declare(strict_types=1);

namespace XheniFramework\Framework;

use FilesystemIterator;

class Router
{
    private $server = [];
    private $post = [];
    private $get = [];
    private $diContainer;

    public function __construct(
        array $server,
        array $post,
        array $get,
        DIContainer $container
    )
    {
        $this->server = $server;
        $this->post = $post;
        $this->get = $get;
        $this->diContainer = $container;
    }

    public function route() : void {
        $i = new FileSystemIterator(
            __DIR__  . '/../Controller/',
            FileSystemIterator::SKIP_DOTS
        );

        $handled = false;
        /** @var \SplFileInfo $controller */
        foreach($i as $controller) {
            $className = '\\XheniFramework\\Controller\\'.(substr($controller->getFilename(), 0, -4));

            $rClass = new \ReflectionClass($className);
            /** @var \ReflectionParameter[] $parameters */
            $parameters = $rClass->getConstructor()->getParameters();
            $diParameters = [
                $this->get
            ];
            foreach($parameters as $parameter) {
                $class = $parameter->getClass();
                if($class !== null) {
                    $diName = $class->getName();
                    $diParameters[] = $this->diContainer->getClass($diName);
                }
            }

            /** @var Controller $controllerClass */
            $controllerClass = (new \ReflectionClass($className))->newInstanceArgs($diParameters);

            if($controllerClass->getUrl() === $this->server['PATH_INFO']) {
                $response = $controllerClass->getResponse();
                foreach($response->getHeaders() as $name => $value) {
                    header("$name: $value");
                }

                echo $response->getBody();
                $handled = true;
                break;
            }
        }

        if($handled === false) {
            die('Go away');
        }
    }
}
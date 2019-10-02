<?php
/**
 * Created by PhpStorm.
 * User: xheni
 * Date: 11/08/2019
 * Time: 15:36
 */

namespace XheniFramework\Framework;

class DIContainer
{
    private $container = [];

    public function registerClass(string $className, string $implementation) {
        $this->container[$className] = new $implementation();
    }

    public function getClass(string $className)  {
        return $this->container[$className];
    }
}
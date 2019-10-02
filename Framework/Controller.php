<?php
declare(strict_types=1);

namespace XheniFramework\Framework;

use XheniFramework\Framework\Http\Response;

abstract class Controller
{
    private $get = [];

    public function __construct(array $get)
    {
        $this->get = $get;
    }

    protected final function getParameter(string $key) : string {
        return $this->get[$key] ? $this->get[$key] : '';
    }

    public abstract function getUrl() : string;
    public abstract function getResponse() : Response;
}
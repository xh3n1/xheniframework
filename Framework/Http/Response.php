<?php
declare(strict_types=1);

namespace XheniFramework\Framework\Http;

abstract class Response
{
    protected $body = '';
    private $headers = [];

    public function __construct($body)
    {
        $this->body = $body;
    }

    public abstract function getBody() : string;

    public final function setHeader(string $key, string $value) {
        $this->headers[$key] = $value;
    }

    public function getHeaders() {
        return $this->headers;
    }
}
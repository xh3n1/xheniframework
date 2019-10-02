<?php
declare(strict_types=1);

namespace XheniFramework\Framework\Http;


class JsonResponse extends Response
{
    public function getBody(): string
    {
        return json_encode($this->body);
    }
}
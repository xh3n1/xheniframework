<?php
declare(strict_types=1);

namespace XheniFramework\Framework;

use XheniFramework\Framework\Http\JsonResponse;
use XheniFramework\Framework\Http\Response;

trait NotImplementedTrait
{
    public final function getResponse() : Response {
        return new JsonResponse('Not implemented');
    }
}
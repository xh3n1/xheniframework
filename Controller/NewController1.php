<?php
declare(strict_types=1);

namespace XheniFramework\Controller;

use XheniFramework\Framework\Controller;
use XheniFramework\Framework\Http\JsonResponse;
use XheniFramework\Framework\Http\Response;
use XheniFramework\Framework\NotImplementedTrait;
use XheniFramework\Framework\Services\DataBaseService;

class NewController1 extends Controller
{
    use NotImplementedTrait;

    public function getUrl(): string
    {
        return '/new1';
    }
}
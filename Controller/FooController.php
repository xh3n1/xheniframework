<?php
declare(strict_types=1);

namespace XheniFramework\Controller;

use XheniFramework\Framework\Controller;
use XheniFramework\Framework\Http\JsonResponse;
use XheniFramework\Framework\Http\Response;

class FooController extends Controller
{
    public function getUrl(): string
    {
        return '/foo';
    }

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        $body = "Hey {$this->getParameter('name')}";
        $response = new JsonResponse($body);
        $response->setHeader('Awesome', 'Yes');
        $response->setHeader('asd', 'asd');
        return $response;
    }
}
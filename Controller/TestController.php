<?php
declare(strict_types=1);

namespace XheniFramework\Controller;

use XheniFramework\Framework\Controller;
use XheniFramework\Framework\Http\JsonResponse;
use XheniFramework\Framework\Http\Response;
use XheniFramework\Framework\Services\DataBaseService;
use XheniFramework\Framework\Services\IDataBaseService;

class TestController extends Controller
{
    /** @var DataBaseService */
    private $dateService;

    public function __construct(array $get, IDataBaseService $dateService)
    {
        parent::__construct($get);
        $this->dateService = $dateService;
    }

    public function getUrl(): string
    {
        return '/test';
    }

    public function getResponse(): Response
    {
        return new JsonResponse(['asdafs' =>  'asdasdasd', 'time' => $this->dateService->getTime()]);
    }
}
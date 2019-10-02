<?php
declare(strict_types=1);

namespace XheniFramework\Framework\Services;


class FutureDataBaseService implements IDataBaseService
{
    public function getTime() : int {
        return time() * 9000;
    }
}
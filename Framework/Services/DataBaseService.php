<?php
declare(strict_types=1);

namespace XheniFramework\Framework\Services;


class DataBaseService implements IDataBaseService
{
    public function getTime() : int {
        return time();
    }
}
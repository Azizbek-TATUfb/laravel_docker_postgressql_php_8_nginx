<?php

namespace App\Helpers;

class StatusHelpers
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;
    const STATUS_DESTROY = 3;

    const STATUS_ACTIVE_LABEL = 'Active';
    const STATUS_INACTIVE_LABEL = 'Inactive';
    const STATUS_DESTROY_LABEL = 'Destroy';
    const  LIST = [
            self::STATUS_ACTIVE => self::STATUS_ACTIVE_LABEL,
            self::STATUS_INACTIVE => self::STATUS_INACTIVE_LABEL,
        ];
    public static function getStatusList()
    {
        return self::LIST;
    }
    public static function getStatusLabel($key = null)
    {
        return self::LIST[$key];
    }
}

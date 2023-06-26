<?php

namespace App\Services;

use App\Models\Admin\Settings;
use App\Repositories\SettingsRepository;

class SettingsService extends BaseService
{
    public function __construct(SettingsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return Settings::whereNotIn('status', [ Settings::STATUS_DESTROY])->paginate(10);
    }
}

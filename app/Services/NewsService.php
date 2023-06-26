<?php

namespace App\Services;

use App\Models\Admin\News;
use App\Repositories\NewsRepository;

class NewsService extends BaseService
{
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        return News::whereNotIn('status', [ News::STATUS_DESTROY])->paginate(10);
    }

}

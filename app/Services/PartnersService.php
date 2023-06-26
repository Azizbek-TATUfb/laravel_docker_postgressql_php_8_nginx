<?php

namespace App\Services;

use App\Models\Admin\Partner;
use App\Repositories\PartnersRepository;

class PartnersService extends BaseService
{

    public function __construct(PartnersRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        return Partner::whereNotIn('status', [ Partner::STATUS_DESTROY])->paginate(10);
    }



}

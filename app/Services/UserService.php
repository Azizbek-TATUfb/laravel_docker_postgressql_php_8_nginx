<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService extends BaseService
{
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($params)
    {
        $userModel = User::where('status', User::STATUS_ACTIVE)->paginate(2);
        return $userModel;//$userModel::pagination(10);

    }

}

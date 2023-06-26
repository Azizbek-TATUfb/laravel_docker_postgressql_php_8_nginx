<?php

namespace App\Repositories;

use App\Helpers\TelegramHelpers;
use App\Models\User;
use App\Repositories\Interfaces\BaseInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserRepository implements UserRepositoryInterface, BaseInterface
{
    private $entity;

    public function __construct(User $entity)
    {
        $this->entity = $entity;
    }

    public function getAll()
    {
        return User::all();
    }
    public function store($params)
    {
        $params['password'] = Hash::make($params['password']);
        try {
            DB::beginTransaction();
            $this->entity->create($params);
            DB::commit();
        }catch (\Exception $e){
            $text = "Error = : ". json_encode($e->getMessage());
            $text.="Class".__CLASS__."\n";
            $text .="Line : ".__LINE__;
            TelegramHelpers::sendMessage($text);
            Log::info('store_user - ' . $e->getMessage());
            DB::rollBack();
        }
    }
}

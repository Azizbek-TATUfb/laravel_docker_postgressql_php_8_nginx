<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission as BasePermission;
class Permission extends BasePermission
{
    use HasFactory;

    public static function addPermission()
    {
        User::create([
            'email' => 'super',
            'name' => 'super',
            'password' => Hash::make('super@123'),
            'role' => 'admin',
            'fullname' => 'Supper user'
        ]);
        $data = [
            'dashboard' => [
                'index',
                'application',
            ],
            'user' => [
                'create',
                'password.edit',
                'store.password-edit',
                'edit',
                'update',
                'index',
                'show',
                'destroy',
            ],
            'company' => [
                'edit',
                'update',
                'index',
                'show',
                'destroy',
            ],
            'specialist-relocation' => [
                'edit',
                'update',
                'index',
                'show',
                'destroy',
            ],
            'application' => [
                'create',
                'store',
                'edit',
                'update',
                'index',
                'show',
                'destroy',
            ],
            'specialist-visa' => [
                'edit',
                'update',
                'index',
                'show',
                'destroy',
                'sendToExpert',
                'change-status',
                'export-excel',
                'sendToApplication',
                'reject',
            ],
            'investor' => [
                'update',
                'edit',
                'index',
                'show',
                'delete',
                'sendToExpert',
                'change-status',
                'export-excel',
                'sendToApplication',
                'reject',
            ],
            'founder' => [
                'edit',
                'update',
                'index',
                'show',
                'delete',
                'sendToExpert',
                'change-status',
                'export-excel',
                'sendToApplication',
                'reject',
            ],

            'admin.permission' => [
                'create',
                'store',
                'edit',
                'update',
                'index',
                'show',
                'destroy',
            ],
            'admin.role' => [
                'create',
                'store',
                'edit',
                'update',
                'index',
                'show',
                'destroy',
            ],
        ];

        foreach ($data as $key => $values){
            Permission::create(['name' => $key, 'description' => $key]);
            array_map(function ($value)use($key){
                Permission::create([
                    'name' => $key.'.'.$value,
                    'parent_name' => $key,
                    'description' => $value
                ]);
            },$values);
//            foreach ($values as $value) {
//                Permission::create([
//                    'name' => $key.'.'.$value,
//                    'parent_name' => $key,
//                    'description' => $value
//                ]);
//           }
        }
        echo "ok";exit();
    }



}

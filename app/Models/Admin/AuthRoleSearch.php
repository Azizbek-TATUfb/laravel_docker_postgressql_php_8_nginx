<?php

namespace App\Models\Admin;

use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\DB;

class AuthRoleSearch
{
    public static function getPermissions(): array
    {
        $parentPer = DB::table('permissions')->whereNull(new Expression('parent_name'))->orderBy('description','asc')->get()->toArray();
        $data = [];
        if (!empty($parentPer)){
            foreach ($parentPer as $key => $permission){
                $childrenPer = DB::table('permissions')->where(new Expression('parent_name'), $permission->name)->get()->toArray();
                $data[$key]['parent'] = $permission;
                $data[$key]['child'] = $childrenPer;
            }
        }
        return $data;
    }
    public static function getRoleHasPermission(int $id): array
    {
        $roleHasPermissions = DB::table('role_has_permissions')->select('permission_id')->where('role_id',$id)->get()->toArray();
        $data =[];
        foreach ($roleHasPermissions as $roleHasPermission) {
            $data[]=$roleHasPermission->permission_id;
        }
        return  $data;
    }
}

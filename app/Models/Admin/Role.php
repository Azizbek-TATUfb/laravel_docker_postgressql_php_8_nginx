<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Spatie\Permission\Models\Role as BaseRole;
class Role extends BaseRole
{
    use HasFactory;
}

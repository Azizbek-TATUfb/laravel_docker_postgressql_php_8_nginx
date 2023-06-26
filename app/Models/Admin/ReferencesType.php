<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferencesType extends Model
{
    use HasFactory;

    const SERVICES_LIMIT = 3;
    const PRODUCTS_LIMIT = 6;
    protected $guarded = [];
    const PRODUCTS_ID = 1;
    const SERVICES_ID = 2;
    const Genre_ID = 3;
}

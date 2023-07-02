<?php

namespace App\Models\Admin;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    const STATUS_DESTROY = 3;
    const STATUS_ACTIVE = 1;
    protected $guarded = [];

    public function attachment()
    {
        return $this->belongsTo(Attachment::class);
    }
}

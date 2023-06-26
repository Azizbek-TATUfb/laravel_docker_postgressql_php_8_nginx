<?php

namespace App\Models\Admin;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    const STATUS_DESTROY = 3; //destroy
    protected $guarded = ['name'];

    public function attachment()
    {
        return $this->belongsTo(Attachment::class);
    }
}

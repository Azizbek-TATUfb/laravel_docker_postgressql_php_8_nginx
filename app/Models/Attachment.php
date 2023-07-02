<?php

namespace App\Models;

use App\Models\Admin\Author;
use App\Models\Admin\Settings;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Attachment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function settings(): HasOne
    {
        return $this->hasOne(Settings::class);
    }
}

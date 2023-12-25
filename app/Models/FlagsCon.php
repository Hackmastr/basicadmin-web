<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlagsCon extends Model
{
    protected $fillable = [
        'flag_id',
        'admin_id',
        'group_id',
    ];
}

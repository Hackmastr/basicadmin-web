<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServerAdmin extends Model
{
    protected $fillable = [
        'server_id',
        'admin_id',
    ];
}

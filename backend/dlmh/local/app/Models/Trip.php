<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trip';
    protected $primaryKey = 'trip_id';
    protected $guarded = [];
}

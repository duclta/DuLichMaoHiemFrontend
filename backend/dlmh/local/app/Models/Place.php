<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'place';
    protected $primaryKey = 'place_id';
    protected $guarded = [];
}

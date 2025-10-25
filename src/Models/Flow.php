<?php

namespace Vishwaraj\Laraflow\Models;

use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    protected $table = 'flows';
    protected $fillable = [
        'name',
        'description',
        'data',
    ];
}

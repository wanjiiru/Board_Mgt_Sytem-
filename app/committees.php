<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class committees extends Model
{
protected $table = 'committees';
    protected $fillable =
        ['id', 'board' ];

}

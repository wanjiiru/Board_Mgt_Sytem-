<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'boards';
    protected $fillable =
        ['First Name', 'last Name', ' Email', ];

}

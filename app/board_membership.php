<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class board_membership extends Model
{
    protected $table = 'board_memberships';
    protected $fillable =
        ['board_id', 'user_id','position'];

}

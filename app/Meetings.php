<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    protected $table ='meetings';
    protected $fillable = ['location', 'agenda', 'title', 'date', 'committee' ];

}

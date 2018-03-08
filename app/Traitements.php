<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traitements extends Model
{
    protected $table="traitements";
    protected $fillable=[
        'description','duree','users_id','tickets_id',
    ];
}

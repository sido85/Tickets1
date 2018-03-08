<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table="tickets";
    protected $fillable=[
        'message','users_id','etat','priorites_id',
    ];

    public function priorites(){
        return $this->belongsTo(\App\Priorites::class);
    }
    public function users(){
        return $this->belongsTo(\App\User::class);
    }
}

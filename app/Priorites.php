<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priorites extends Model
{
    protected $table="priorites";
    protected $fillable=[
        'nom',
    ];

    public function tickets(){
        return $this->hasMany(\App\Tickets::class);
    }
}

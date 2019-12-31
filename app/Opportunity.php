<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Application;


class Opportunity extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function applications()
    {
        # code...
        return $this->hasMany(Application::class);
    }
}

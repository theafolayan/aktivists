<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Application;
// use Illuminate\Support\Facades\App;
use App\OpportunityCategory;
class Opportunity extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function applications()
    {
        # code...
        return $this->hasMany(Application::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function category()
    {
        # code...
        return $this->belongsTo(OpportunityCategory::class);
    }
    
}

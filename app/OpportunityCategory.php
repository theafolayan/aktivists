<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Opportunity;
class OpportunityCategory extends Model
{
    public function opportunities()
    {
        return $this->hasMany(Opportunity::class);
    }
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'slug';
    }

}

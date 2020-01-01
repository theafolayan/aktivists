<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Opportunity;
class Application extends Model
{
    protected $fillable = [
        'name', 'detail', 'stock', 'price', 'discount'
    ];
    
    public function opportunity(){
        return $this->belongsTo(Opportunity::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

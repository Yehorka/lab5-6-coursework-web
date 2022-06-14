<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public $timestamps = false;
    protected $table = 'dishes';
    use HasFactory;
    public function chefs(){
        return $this->belongsToMany(Chef::class);
    }
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
}
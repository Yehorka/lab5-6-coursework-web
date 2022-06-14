<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    public $timestamps = false;
    protected $table = 'chefs';
    use HasFactory;
    public function dishes(){
        return $this->belongsToMany(Dish::class);
    }
}
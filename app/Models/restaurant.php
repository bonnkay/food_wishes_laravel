<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'adress', 'phone', 'description', 'image', 'link'];

    public function dishes(){
        return $this -> hasMany(dish::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dish extends Model
{
    use HasFactory;

    protected $fillable = ['restaurant_id', 'name', 'price', 'category', 'description', 'image', 'state'];

    public function restaurant()
    {
        return $this->belongsTo(restaurant::class);
    }
}

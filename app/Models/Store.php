<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = ['merchant_id', 'name'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}


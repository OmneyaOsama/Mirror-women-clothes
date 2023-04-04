<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;


class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',

    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products(){
        return $this->hasMany(Product::class, 'product_id');
    }

}

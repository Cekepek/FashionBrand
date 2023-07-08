<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    function users()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    function products(){
        return $this->belongsToMany(Product::class, "transaction_product", "transaction_id", "product_id", "id", "id")
        ->withPivot("quantity");
    }
}

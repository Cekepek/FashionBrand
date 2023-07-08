<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function transactions(){
        return $this->belongsToMany(Transaction::class, "transaction_product", "product_id", "transaction_id", "id", "id")
        ->withPivot("quantity", "price");
    }

    function categories(){
        return $this->belongsToMany(Category::class, "category_product", "product_id", "category_id", "id", "id");
    }
}

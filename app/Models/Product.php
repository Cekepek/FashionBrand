<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function transactions(){
        return $this->belongsToMany(Transaction::class, "transaction_product", "product_id", "transaction_id", "id", "id")
        ->withPivot("quantity");
    }

    function brands()
    {
        return $this->belongsTo(Brand::class, "brand_id", "id");
    }

    function product_types()
    {
        return $this->belongsTo(Product_type::class, "product_type", "id");
    }

    function categories(){
        return $this->belongsToMany(Category::class, "category_product", "product_id", "category_id", "id", "id");
    }
}

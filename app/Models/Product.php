<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function transactions(){
        return $this->belongsToMany(Transaction::class, "product_transaction", "product_id", "transaction_id", "id", "id")
        ->withPivot("quantity", "price");
    }
}

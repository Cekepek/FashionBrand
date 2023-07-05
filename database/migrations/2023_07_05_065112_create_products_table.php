<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('prod_type_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('dim_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->foreign('prod_type_id')->references('id')->on('product_types');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('dim_id')->references('id')->on('dimensions');
            $table->id();
            $table->string('name', 200);
            $table->integer('price', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

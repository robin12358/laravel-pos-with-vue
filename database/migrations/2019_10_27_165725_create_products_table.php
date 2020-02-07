<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('product_id');
            $table->string('product_name', 100);
            $table->integer('product_category');
            $table->string('brand_name');
            $table->string('product_cost');
            $table->string('product_mrp');
            $table->string('product_tax');
            $table->string('Measurement_method', 50);
            $table->string('minmum_quantity', 50);
            $table->text('details', )->nullable();
            $table->text('image')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('deleted_by')->nullable(); 
            $table->dateTime('deleted_at')->nullable();
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

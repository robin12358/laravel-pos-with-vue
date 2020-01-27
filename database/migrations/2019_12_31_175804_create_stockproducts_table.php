<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockproducts', function (Blueprint $table) {
            $table->bigIncrements('stockproduct_id');
            $table->string('stock',25);
            $table->string('porduct',25);
            $table->string('quentity',150);
            $table->text('note')->nullable();
            $table->string('per_unit_brought_price',150);
            $table->string('per_unit_sell_price',150);
            $table->string('created_by')->nullable();
            $table->string('deleted_by')->nullable(); 
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
        Schema::dropIfExists('stockproducts');
    }
}

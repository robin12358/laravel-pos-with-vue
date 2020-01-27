<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunningstocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runningstocks', function (Blueprint $table) {
            $table->bigIncrements('runningstock_id');
            $table->string('stock_id',10);
            $table->string('product_id',10);
            $table->string('stock_quentity',100);
            $table->string('current_quentity',100);
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
        Schema::dropIfExists('runningstocks');
    }
}

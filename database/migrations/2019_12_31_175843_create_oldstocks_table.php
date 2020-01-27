<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOldstocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oldstocks', function (Blueprint $table) {
            $table->bigIncrements('oldstock_id');
            $table->string('stock',10);
            $table->string('product',10);
            $table->string('quentity',100);
            $table->dateTime('finished_date');
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
        Schema::dropIfExists('oldstocks');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('customer_id');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->integer('customer_phone');
            $table->text('customer_address');
            $table->integer('customer_account_no');
            $table->integer('customer_opening_balance')->nullable();
            $table->text('customer_details')->default('UnTaxable');
            $table->string('customer_image');
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
        Schema::dropIfExists('customers');
    }
}

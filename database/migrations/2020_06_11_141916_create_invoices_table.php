<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('cart_id')->index();
            $table->string('reference_number')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('country');
            $table->string('street_address');
            $table->string('city');
            $table->string('zip_code');
            $table->string('contact_number');
            $table->string('email');
            $table->string('payment_method');
            $table->integer('status')->default(0); /** 0 - UNPAID; 1 - PAID; */
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
        Schema::dropIfExists('invoices');
    }
}

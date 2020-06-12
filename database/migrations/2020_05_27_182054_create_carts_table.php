<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('session_id')->nullable();
            $table->boolean('status')->default(1); /** 0 = Inactive / 1 = Active */
            $table->decimal('subtotal', 9, 2)->default(0);
            $table->decimal('delivery_fee', 9, 2)->default(10);
            $table->unsignedInteger('discount_percentage')->default(20);
            $table->decimal('discount_amount')->default(0);
            $table->decimal('total', 9, 2)->default(0);
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
        Schema::dropIfExists('carts');
    }
}

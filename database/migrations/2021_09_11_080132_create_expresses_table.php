<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expresses', function (Blueprint $table) {
            $table->id();
            $table->string('zip_No')->nullable();
            $table->string('name')->nullable();
            $table->string('photos')->nullable();
            $table->string('videos')->nullable();
            $table->string('userId')->nullable();
            $table->string('express')->nullable();
            $table->string('store')->nullable();
            $table->string('buyer_product_status')->nullable();


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
        Schema::dropIfExists('expresses');
    }
}

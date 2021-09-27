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
            $table->string('brand_name')->nullable();
            $table->string('photos')->nullable();
            $table->string('videos')->nullable();
            $table->string('userId')->nullable();
            $table->string('role')->nullable();
            $table->string('express')->nullable();
            $table->string('store')->nullable();
            $table->string('buyer_product_status')->nullable();
            $table->string('status_expert')->nullable();
            $table->text('comment')->nullable();
            $table->text('admin_expert')->nullable();
            $table->string('expert_point')->nullable();
            $table->string('expert_id')->nullable();

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

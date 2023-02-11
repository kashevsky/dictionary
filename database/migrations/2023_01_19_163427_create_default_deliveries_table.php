<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_deliveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locality');
            $table->string('street');
            $table->string('home_number');
            $table->string('flat_number');
            $table->string('porch');
            $table->string('floor');
            $table->string('comment');
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
        Schema::dropIfExists('default_deliveries');
    }
};

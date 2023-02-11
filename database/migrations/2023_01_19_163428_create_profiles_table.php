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
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('phone_number');
            $table->date('birth');
            $table->index('id');
            $table->unsignedBigInteger('delivery_id')->nullable();
            $table->unsignedBigInteger('default_delivery')->default(1);
            $table->foreign('default_delivery')->on('default_deliveries')->references('id');
            $table->foreign('id')->on('users')->references('id');
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
        Schema::dropIfExists('profiles');
    }
};

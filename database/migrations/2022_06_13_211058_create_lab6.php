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
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
        });
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
        });
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('client');
            $table->foreign('client')->references('id')->on('clients');
        });
        Schema::create('chef_dish', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chef_id');
            $table->unsignedBigInteger('dish_id');
            $table->foreign('dish_id')->references('id')->on('dishes');
            $table->foreign('chef_id')->references('id')->on('chefs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chefs');
        Schema::dropIfExists('dishes');
        Schema::dropIfExists('dish_chef');
    }
};
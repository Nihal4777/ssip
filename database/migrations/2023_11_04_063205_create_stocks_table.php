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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId("item");
            $table->foreign("item")->references('id')->on('items');
            $table->integer('qnt');
            $table->foreignId("center_id")->nullable(true);
            $table->foreign("center_id")->references('id')->on('centers');
            $table->integer('status')->nullable(); //for future use
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
        Schema::dropIfExists('stocks');
    }
};

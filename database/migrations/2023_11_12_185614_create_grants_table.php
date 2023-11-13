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
        Schema::create('grants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("item_id");
            $table->foreignId("center_id")->nullable(true);
            $table->float('qnt');
            $table->float('fulfilled')->default(0);
            $table->foreign("item_id")->references('id')->on('items');
            $table->foreign("center_id")->references('id')->on('centers');
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
        Schema::dropIfExists('grants');
    }
};

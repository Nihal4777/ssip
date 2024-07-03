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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedInteger("reg_id");
            $table->date("dob");   
            $table->string("gender");
            $table->text("address_1");
            $table->string("category");
            $table->string("campus")->nullable();
            $table->string("house")->nullable();
            $table->string("emergency_contact");
            $table->string("city");
            $table->string("zip");
            $table->foreignId("centers_id")->constrained();
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
        Schema::dropIfExists('students');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Register extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Registers',function(Blueprint $table){
            $table->bigIncrements('Id');
            $table->string('fname');
            $table->string('lname');
            $table->string('Is_Admin')->default('0');
            $table->string('Is_Blocked')->default('0');
            $table->string('Email')->unique();
            $table->string('Password');
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
        //
        Schema::dropIfExists('registers');
    }
}

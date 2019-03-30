<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_sample', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product');
            $table->string('size');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('organization');
            $table->string('address');
            $table->string('comments');
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
        Schema::dropIfExists('request_sample');
    }
}

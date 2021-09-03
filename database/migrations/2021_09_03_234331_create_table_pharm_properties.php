<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePharmProperties extends Migration
{

    public function up()
    {
        Schema::create('pharm_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('herb_id')->unsigned()->index();
            $table->string('name',100)->nullable(false);


            $table->foreign('herb_id')->references('id')->on('herb')->onDelete('cascade');

        });
    }


    public function down()
    {
        Schema::dropIfExists('pharm_properties');
    }
}

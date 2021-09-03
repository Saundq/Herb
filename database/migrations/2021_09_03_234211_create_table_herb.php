<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHerb extends Migration
{

    public function up()
    {
        Schema::create('herb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',200)->nullable(false);
            $table->text('description')->nullable(true);
        });
    }


    public function down()
    {
        Schema::dropIfExists('herb');
    }
}

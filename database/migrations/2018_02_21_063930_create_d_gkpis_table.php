<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDGkpisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_gkpis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('factory_id');
            $table->double('payrole');
            $table->integer('ppeople');
            $table->integer('cpeople');
            $table->double('ocut');
            $table->double('osew');
            $table->double('ofin');
            $table->integer('abs');
            $table->intger('twf');
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
        Schema::dropIfExists('d_gkpis');
    }
}

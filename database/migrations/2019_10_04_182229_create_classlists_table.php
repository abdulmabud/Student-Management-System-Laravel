<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasslistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('className', 50);
            $table->integer('availableSeat');
            $table->integer('totalSeat');
            $table->string('classStatus', 40);
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
        Schema::dropIfExists('classlists');
    }
}

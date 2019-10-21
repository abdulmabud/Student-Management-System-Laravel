<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bookName', 100);
            $table->string('bookAuthor', 100);
            $table->float('bookPrice', 6, 2);
            $table->integer('bookQuantityAvailable');
            $table->integer('bookQuantity');
            $table->string('bookCategory', 50);
            $table->string('bookStatus', 20);
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
        Schema::dropIfExists('libraries');
    }
}

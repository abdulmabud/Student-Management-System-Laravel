<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name', 100);
            $table->string('Phone', 50);
            $table->date('Birth', 50);
            $table->string('Gender', 10);
            $table->string('Class', 50);
            $table->string('Address', 100);
            $table->string('fatherName', 100);
            $table->string('fatherPhone', 50);
            $table->string('Status', 50);
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
}

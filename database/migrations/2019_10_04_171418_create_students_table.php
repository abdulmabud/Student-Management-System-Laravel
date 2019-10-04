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
            $table->string('studentName', 100);
            $table->string('studentPhone', 50);
            $table->date('studentBirth', 50);
            $table->string('studentGender', 10);
            $table->string('studentClass', 50);
            $table->string('studentAddress', 100);
            $table->string('fatherName', 100);
            $table->string('fatherPhone', 50);
            $table->string('studentStatus', 50);
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

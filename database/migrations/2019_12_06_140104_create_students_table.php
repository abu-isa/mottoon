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
            $table->string('nama')->unique();
            $table->string('nama_arab')->unique();
            $table->string('nis', '10')->unique();
            $table->string('usercode');
            $table->string('email')->unique();
            $table->string('kota');
            $table->string('tgl_lahir');
            $table->string('phone', '15')->unique();
            $table->string('alamat');
            $table->integer('program_id');
            $table->enum('status', ['Y', 'N']);
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyalur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyalur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idAgen',10);
            $table->string('idPenyalur', 10)->unique();
            $table->string('namaPenyalur',50);
            $table->text('alamatPenyalur');
            $table->integer('kuota');
            $table->integer('latitude');
            $table->integer('longtitude');
            $table->integer('status');
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
        Schema::dropIfExists('penyalur');
    }
}

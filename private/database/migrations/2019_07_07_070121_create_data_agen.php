<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAgen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataAgen', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->char('idAgen')->unique();
			$table->string('namaAgen',50);
			$table->text('alamatAgen');
			$table->string('username',20);
			$table->string('password');
			$table->string('latitude');
			$table->string('longtitude');
			$table->string('level');
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
        Schema::dropIfExists('dataAgen');
    }
}

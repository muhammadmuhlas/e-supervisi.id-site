<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
            $table->string('username')->unique();
	        $table->string('email')->unique();
            $table->string('password');
	        $table->integer('id_administrator')->nullable()->unsigned();
	        $table->integer('id_pengawas_sekolah')->nullable()->unsigned();
	        $table->integer('id_operator_sekolah')->nullable()->unsigned();
	        $table->integer('id_kepala_sekolah')->nullable()->unsigned();
	        $table->integer('id_guru')->nullable()->unsigned();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

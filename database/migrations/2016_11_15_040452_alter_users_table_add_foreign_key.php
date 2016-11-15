<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('users', function (Blueprint $table) {
		    $table->foreign('id_administrator')->references('id')->on('data_administrator');
		    $table->foreign('id_pengawas_sekolah')->references('id')->on('data_pengawas_sekolah');
		    $table->foreign('id_operator_sekolah')->references('id')->on('data_operator_sekolah');
		    $table->foreign('id_kepala_sekolah')->references('id')->on('data_kepala_sekolah');
		    $table->foreign('id_guru')->references('id')->on('data_guru');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('users', function (Blueprint $table) {
			$table->dropForeign(['id_administrator']);
			$table->dropForeign(['id_pengawas_sekolah']);
			$table->dropForeign(['id_operator_sekolah']);
			$table->dropForeign(['id_kepala_sekolah']);
			$table->dropForeign(['id_guru']);
	    });
    }
}

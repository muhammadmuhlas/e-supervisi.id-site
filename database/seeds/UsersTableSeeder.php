<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    /*Administrator*/
	    $id = DB::table('data_administrator')->insertGetId([
		    'created_at' => Carbon::now(),
	    ]);
	    
	    DB::table('users')->insert([
		    'name' => "aku_adalah_Administrator",
		    'email' => 'administrator@e-supervisi.id',
	    	'username' => 'administrator',
		    'password' => bcrypt(123123),
		    'id_administrator' => $id
	    ]);
	    
	    /*Pengawas Sekolah*/
	    $id = DB::table('data_pengawas_sekolah')->insertGetId([
		    'created_at' => Carbon::now()
	    ]);
	
	    DB::table('users')->insert([
		    'name' => "aku_adalah_pengawas_sekolah",
		    'email' => 'pengawas_sekolah@e-supervisi.id',
		    'username' => 'pengawas_sekolah',
		    'password' => bcrypt(123123),
		    'id_pengawas_sekolah' => $id
	    ]);
		
	    /*Operator Sekolah*/
	    $id = DB::table('data_operator_sekolah')->insertGetId([
		    'created_at' => Carbon::now(),
	    ]);
	
	    DB::table('users')->insert([
		    'name' => "aku_adalah_operator_sekolah",
		    'email' => 'operator_sekolah@e-supervisi.id',
		    'username' => 'operator_sekolah',
		    'password' => bcrypt(123123),
		    'id_operator_sekolah' => $id
	    ]);
		
	    /*Kepala Sekolah*/
	    $id = DB::table('data_kepala_sekolah')->insertGetId([
		    'created_at' => Carbon::now(),
	    ]);
	
	    DB::table('users')->insert([
		    'name' => "aku_adalah_kepala_sekolah",
		    'email' => 'kepala_sekolah@e-supervisi.id',
		    'username' => 'kepala_sekolah',
		    'password' => bcrypt(123123),
		    'id_kepala_sekolah' => $id
	    ]);
	    
		/*Guru*/
	    $id = DB::table('data_guru')->insertGetId([
		    'created_at' => Carbon::now(),
	    ]);
	
	    DB::table('users')->insert([
		    'name' => "aku_adalah_guru",
		    'email' => 'guru@e-supervisi.id',
		    'username' => 'guru',
		    'password' => bcrypt(123123),
		    'id_guru' => $id
	    ]);
	    
    }
}

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
		
		    'name' => "Administrator 1",
		    'created_at' => Carbon::now(),
	    ]);
	    
	    DB::table('users')->insert([
	    	'username' => 'administrator',
		    'password' => bcrypt(123456),
		    'id_administrator' => $id
	    ]);
	    
	    /*Pengawas Sekolah*/
	    $id = DB::table('data_pengawas_sekolah')->insertGetId([
		
		    'name' => "Pengawas Sekolah 1",
		    'created_at' => Carbon::now()
	    ]);
	
	    DB::table('users')->insert([
		    'username' => 'pengawas_sekolah',
		    'password' => bcrypt(123456),
		    'id_pengawas_sekolah' => $id
	    ]);
		
	    /*Operator Sekolah*/
	    $id = DB::table('data_operator_sekolah')->insertGetId([
		    'name' => "Operator Sekolah 1",
		    'created_at' => Carbon::now(),
	    ]);
	
	    DB::table('users')->insert([
		    'username' => 'operator_sekolah',
		    'password' => bcrypt(123456),
		    'id_operator_sekolah' => $id
	    ]);
		
	    /*Kepala Sekolah*/
	    $id = DB::table('data_kepala_sekolah')->insertGetId([
		    'name' => "Kepala Sekolah 1",
		    'created_at' => Carbon::now(),
	    ]);
	
	    DB::table('users')->insert([
		    'username' => 'kepala_sekolah',
		    'password' => bcrypt(123456),
		    'id_kepala_sekolah' => $id
	    ]);
	    
		/*Guru*/
	    $id = DB::table('data_guru')->insertGetId([
		    'name' => "Guru 1",
		    'created_at' => Carbon::now(),
	    ]);
	
	    DB::table('users')->insert([
		    'username' => 'guru',
		    'password' => bcrypt(123456),
		    'id_guru' => $id
	    ]);
	    
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_user', function(Blueprint $table)
		{
            $table->mediumInteger('id_user',true,true);
            $table->string('username',20);
            $table->string('password',32);                                  //md5 hash for password storage
            $table->string('email');
            $table->string('alamat');
            $table->string('kota');
            $table->string('kode_pos',5);
            $table->boolean('user_level');                                  //user level | 0=biasa, 1=Admin/Pengurus
            $table->dateTime('kunjungan_terakhir');
            $table->mediumInteger('jumlah_post',false,true);
            $table->mediumInteger('id_umat',false,true);

            //indexes
            //$table->primary('id_user');



		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_user');
	}

}

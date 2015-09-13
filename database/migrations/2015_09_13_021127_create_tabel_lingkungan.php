<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelLingkungan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_lingkungan', function(Blueprint $table)
		{
			$table->mediumInteger('id_lingkungan',true,true);
            $table->string('nm_lingkungan');
            $table->mediumInteger('id_ketua_lingkungan',false,true);                //ID Umat sebagai Ketua lingkungan

            //indexes
            //$table->primary('id_lingkungan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_lingkungan');
	}

}

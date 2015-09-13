<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelKategorial extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_kategorial', function(Blueprint $table)
		{
			$table->mediumInteger('id_kategorial',true,true);
            $table->string('nm_kategorial');
            $table->mediumInteger('id_ketua_kategorial',false,true);

            //indexes
            //$table->primary('id_kategorial');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_kategorial');
	}

}

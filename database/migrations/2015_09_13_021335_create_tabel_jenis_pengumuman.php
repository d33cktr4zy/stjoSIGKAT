<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelJenisPengumuman extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_jns_pengumuman', function(Blueprint $table)
		{
			$table->mediumInteger('id_jns_pengumuman',true,true);
            $table->string('jns_pengumuman');
            $table->string('keterangan')->nullable(); //keterangan mengenai jenis pengumuman

            //indexes
            //$table->primary('id_jns_pengumuman');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_jns_pengumuman');
	}

}

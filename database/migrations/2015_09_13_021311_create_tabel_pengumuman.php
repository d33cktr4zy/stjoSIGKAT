<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelPengumuman extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_pengumuman', function(Blueprint $table)
		{
			$table->mediumInteger('id_pengumuman',true,true);
            $table->date('tgl_pengumuman');
            $table->mediumInteger('id_jns_pengumuman',false,true);
            $table->string('tema_pengumuman');
            $table->longText('isi_pengumuman');

            //indexes
            //$table->primary('id_pengumuman');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_pengumuman');
	}

}

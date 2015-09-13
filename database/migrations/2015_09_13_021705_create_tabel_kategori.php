<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelKategori extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_forum_kategori', function(Blueprint $table)
		{
			$table->mediumInteger('id_kategori',true,true);
            $table->string('nm_kategori');
            $table->mediumText('kat_desc');
            $table->mediumInteger('id_last_post',false,true);

            //indexes
            //$table->primary('id_kategori');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_forum_kategori');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelForumTopik extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_forum_topik', function(Blueprint $table)
		{
			$table->mediumInteger('id_topik',true,true);
            $table->string('nm_topik');
            $table->mediumInteger('id_forum_kategori',false,true);
            $table->dateTime('waktu_buat_topik');
            $table->mediumInteger('id_pembuat_',false,true);

            //indexes
            //$table->primary('id_topik');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_forum_topik');
	}

}

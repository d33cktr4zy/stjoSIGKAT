<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelSakramen extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_sakramen', function(Blueprint $table)
		{
            $table->mediumInteger('id_sakramen',true,true);
            $table->string('nm_sakramen');

            //indexes
            //$table->primary('id_sakramen');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_sakramen');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPersyaratanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('tbl_persyaratan', function(Blueprint $table)
		{
			$table->integer('persyaratan_id', true);
			$table->integer('id_mahasiswa');
			$table->integer('id_jurusan');
			$table->char('nama_berkas', 50);
			$table->integer('ketersediaan');
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_persyaratan');
	}
}

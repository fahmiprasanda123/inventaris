<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblStok extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_stok'           => [
				'type'              => 'INT',
				'constraint'        => 11,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'id_produk'         => [
				'type'              => 'INT',
				'constraint'        => 11,
			],
			'jumlah_barang'         => [
				'type'              => 'INT',
				'constraint'        => 11,
			],
			'tgl_update'         => [
				'type'              => 'date'
			],
		]);
		$this->forge->addKey('id_stok', TRUE);
		$this->forge->createTable('tbl_stok');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}

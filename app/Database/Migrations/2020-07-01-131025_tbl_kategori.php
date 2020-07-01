<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblKategori extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_kategori'           => [
				'type'              => 'INT',
				'constraint'        => 11,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'nama_kategori'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '200',
			],
		]);
		$this->forge->addKey('id_kategori', TRUE);
		$this->forge->createTable('tbl_kategori');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}

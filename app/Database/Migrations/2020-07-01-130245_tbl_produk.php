<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblProduk extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_produk'           => [
				'type'              => 'INT',
				'constraint'        => 11,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'id_kategori'         => [
				'type'              => 'INT',
				'constraint'        => '11',
			],
			'nama_produk'       => [
				'type'              => 'varchar',
				'constraint'        => '200',
			],
			'kode_produk'       => [
				'type'              => 'varchar',
				'constraint'        => '50',
			],
			'foto_produk'       => [
				'type'              => 'varchar',
				'constraint'        => '50',
			],
			'tgl_register'       => [
				'type'              => 'date'
			],
		]);
		$this->forge->addKey('id_produk', TRUE);
		$this->forge->createTable('tbl_produk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}

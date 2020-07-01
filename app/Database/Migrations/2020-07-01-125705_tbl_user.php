<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblUser extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_user'           => [
				'type'              => 'INT',
				'constraint'        => 11,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'nama_user'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '200',
			],
		]);
		$this->forge->addKey('id_user', TRUE);
		$this->forge->createTable('tbl_user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}

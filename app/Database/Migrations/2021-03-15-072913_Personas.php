<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Personas extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idpersona'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nombre'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'apellido'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
		]);
		$this->forge->addKey('idpersona', true);
		$this->forge->createTable('persona');
	}

	public function down()
	{
		$this->forge->dropTable('blog');
	}
}

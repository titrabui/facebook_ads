<?php

namespace Fuel\Migrations;

class Create_facebook_accounts
{
	public function up()
	{
		\DBUtil::create_table('facebook_accounts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'password' => array('constraint' => 50, 'type' => 'varchar'),
			'account_id' => array('constraint' => 11, 'type' => 'int'),
			'access_token' => array('constraint' => 1000, 'type' => 'varchar'),
			'app_id' => array('constraint' => 11, 'type' => 'int'),
			'app_secret' => array('constraint' => 255, 'type' => 'varchar'),
			'credit_code' => array('constraint' => 255, 'type' => 'varchar'),
			'status' => array('constraint' => 2, 'type' => 'tinyint', 'default' => 0),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('facebook_accounts');
	}
}
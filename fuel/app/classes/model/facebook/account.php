<?php

class Model_Facebook_Account extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'email',
		'password',
		'account_id',
		'access_token',
		'app_id',
		'app_secret',
		'credit_code',
		'status',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'facebook_accounts';

}

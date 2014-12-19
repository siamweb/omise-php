<?php
require_once dirname(__FILE__).'/omise/OmiseAccount.php';
require_once dirname(__FILE__).'/omise/OmiseBalance.php';
require_once dirname(__FILE__).'/omise/OmiseTokens.php';

$object = OmiseTokens::create(array(
		'name' => 'Somchai Prasert',
		'number' => '4242424242424242',
		'expiration_month' => 10,
		'expiration_year' => 2018,
		'city' => 'Bangkok',
		'postal_code' => '10320',
		'security_code' => 123
		
));
var_dump($object);

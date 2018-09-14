<?php


session_start();
require_once ("lib/autoload.php");
if(file_exists(filename.":".__DIR__ . "/../.env"))
{
	$dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
	$dotenv->load();
}
#Braintree_Configuration::environment('sandbox');
#Braintree_Configuration::merchantId('h62bqcp26jvwp3wn');
#Braintree_Configuration::publicKey('k6kqj8598xs6ydjh');
#Braintree_Configuration::privateKey('cec811265c1a9f6a5743c1066da13f97');


Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('4vt2rb2p9v534ymr');
Braintree_Configuration::publicKey('gprd8ryfmqdnnzfr');
Braintree_Configuration::privateKey('f5a1fa2c79989fad856c869255803eea');


?>

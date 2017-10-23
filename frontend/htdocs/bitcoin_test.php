<?php
require_once('easybitcoin.php');
$bitcoin = new Bitcoin("user","123456","117.122.208.215","8332","http");
var_dump($bitcoin);
$bitcoin->getinfo();
//$bitcoin->getrawtransaction('0e3e2357e806b6cdb1f70b54c3a3a17b6714ee1f0e68bebb44a74b1efd512098',1);
//$bitcoin->getblock('000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f');
//$new_address = $bitcoin->getnewaddress($CFG->bitcoin_accountname);

?>

<?php
	if (!empty($_REQUEST['bs_db_name'])) {
		$CFG->dbhost = "192.168.1.61";
		$CFG->dbname = $_SESSION['bs_db_name'];
		$CFG->dbuser = "poker_user";
		$CFG->dbpass = "qI3PUx9rvSIofpjL";
		$CFG->dbport = "3307";
		
		db_connect ( $CFG->dbhost, $CFG->dbname, $CFG->dbuser, $CFG->dbpass ,$CFG->dbport );
	}
?>

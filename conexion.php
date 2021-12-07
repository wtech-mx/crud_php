<?php
	$con = new mysqli('localhost', 'root', '', 'test_updateprod');
	
	if(!$con){
		die("Error: Cannot connect to the database");
	}

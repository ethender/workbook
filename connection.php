<?php

	if(($connection = mysql_connect("127.0.0.1","root","19931993")) === false)die("could not connect the database");
	if(mysql_selectdb("workbook",$connection) === false)die("could not select database");
	
?>
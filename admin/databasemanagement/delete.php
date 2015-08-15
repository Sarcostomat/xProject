<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ("C:/Users/Programmierer/Documents/Php - Entwicklung/Xampp/htdocs/PhpProject2/connecter/connect.php");


	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM user WHERE userid='$id'";
		$res= mysql_query($sql) or die("Failed".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=../adminviewdb.php'>";
	}
?>

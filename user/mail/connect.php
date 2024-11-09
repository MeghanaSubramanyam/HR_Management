<?php
	
	class database
	{
		
		function connection()
		{
			return mysqli_connect('127.0.0.1','phpmyadmin','676107869775','hrm');
		}
	}

?>
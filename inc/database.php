<?php
	try{
		$conn = new PDO('mysql:host=localhost;dbname=assignment1_php','root','');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}


?>

<?php
		if(isset ($_POST['name'])) 	{
		$naam = $_POST['name'];
		$startdate = $_POST['start-date'];
		$discription = $_POST['discription'];
		$enddate = $_POST['end-date'];
		$delete = $_GET['id'];
		$sql = "INSERT INTO todo (naam);
		VALUES(?)";
		$link = new mysqli('localhost','root','','todo');
		}
			if ($link->connect_error) {
		die("Connection failed: " . $link->connect_error);
			} 
		echo "";
		
		mysqli_query($link,"UPDATE todo SET naam='$naam', `start-datum`='$startdate', beschrijving='$discription', `eind-datum`='$enddate' WHERE id=$delete") ?>
<?php header('Location: to-do-list.php'); ?>  
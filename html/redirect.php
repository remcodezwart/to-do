
<?php 
	if(isset ($_POST['name'])) 	{
		$naam = $_POST['name'];
		$startdate = $_POST['start-date'];
		$discription = $_POST['discription'];
		$enddate = $_POST['end-date'];
		$sql = "INSERT INTO todo (naam)
		VALUES(?)";
		$con=mysqli_connect("localhost","root","","todo");
		//chekt verbinding
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		mysqli_query($con,"INSERT INTO `todo` (`naam`, `start-datum`, `beschrijving`, `eind-datum`)
		VALUES('$naam', '$startdate', '$discription','$enddate')");
	};
	if(isset ($_GET['id'])) {;
		$delete = $_GET['id'];
		$con=mysqli_connect("localhost","root","","todo");
		//chekt verbinding
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		mysqli_query($con, "DELETE FROM todo WHERE id=$delete");

		
		mysqli_close($con);
	};?>

	
<?php  header('Location: to-do-list.php'); /* Stuur de browser naar www.site.nl */  ?>  
	

		
		
	
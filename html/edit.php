<!DOCTYPE html>

<html>
<head>
	<title>To do</title>
	<link href="../css/layout.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<ul class="main">
			<li class="main" ><a class="main" href="to-do.php">invulpagina</a></li>
			<li class="main" ><a class="main" href="#">te doen lijst</a></li>
		</ul>
	</div>
<div class="content height">
	<p> <?php // Create connection
			$conn = new mysqli("localhost","root","","todo");
			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}?>
		<div class="forum">
			<form method="post" action="edit-database.php?id=<?php if(isset ($_GET["id"])) { 
			echo $_GET['id'];}?>"> 
		<p>
		  <label>start-datum</label>
		  <input type="text" name="start-date" placeholder="start date" required/>
		</p>
		
		<p>
		  <label>naam</label>
		  <input type="text" name="name" placeholder="naam" required/>
		</p>
		
		<p>
		  <label>beschrijving</label>
		  <textarea class="discription" cols="33" rows="5" type="text" name="discription">
		  </textarea>
		</p>
		
		<p>
		  <label>eind-datum</label>
		  <input type="text" name="end-date" placeholder="end date" required/>
		</p>
				  <input type="submit" value="edit" />
				</p>
			  </form>
	   </div>		
</body>
</html>
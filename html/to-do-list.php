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
		<p>
		<?php // Create connection
				$conn = new mysqli("localhost","root","","todo");
				// Check connection
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
				$sql = "SELECT id,naam, `start-datum`,beschrijving, `eind-datum` FROM todo";
				$result = $conn->query($sql);?>
						
				<ul class='top'>
				<li>Begin datum</li>
	            <li>Naam</li>
				<li>Eind datum</li>
				<li>beschrijving</li>
				</ul>
				<?php 
				foreach($result as $waarde)
				{
				?>
				<ul>
				<li class="database">
				<?php	echo $waarde ['start-datum'] ?> 
					<span></span>
				</li>
				<li class="database">
				<?php   echo $waarde ['naam']  ?>
					<span></span>
				</li>
				<li class="database">
				<?php	echo $waarde ['eind-datum']  ?>
					<span></span>
				</li>
				<li class="database">
				<?php	echo $waarde ['beschrijving']  ?>
				</li>
					
				<a class='float' href="redirect.php?id=<?php echo $waarde['id'] ?>">verwijder </a>
				
				<a class='float' href="edit.php?id=<?php echo $waarde['id']?>">bewerk</a> 
				</ul>
				<?php } ?>	

				
				<?php $conn->close();?>				

 </p>
	</div>
</body>
</html>
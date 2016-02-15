<!DOCTYPE html>

<?php 
	$link = new mysqli('localhost','root','','todo');
	
	if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
	} 
?>


<html>
<head>
	<title>To do</title>
	<link href="../css/layout.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="header">
		<ul class="main">
			<li class="main"><a class="main" href="#">invulpagina</a></li>
			<li class="main"><a class="main" href="to-do-list.php">te doen lijst</a></li>
		</ul>
	</div>
	<div class="content">
		<div class="forum">
		<p class="desription">
			 beschrijving,begin-datum,eind-datum en een naam kan je invoeren
		</p>
			<form method="post" action="redirect.php">
		<p>
		  <label>start-datum</label>
		  <input type="text" name="start-date" placeholder="start datum" required/>
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
		  <input type="text" name="end-date" placeholder="eind datum" required/>
		</p>
				  <input type="submit" value="Versturen" />
				</p>
			  </form>
	   </div>
	</div>
</body>
</html>
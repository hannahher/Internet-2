<!DOCTYPE HTML>
	<html> 
	<body>
	<?php
		include('nav.inc')
	?>
	<h1> Übung </h1> 
	
	
	<form action="index.php" method="post" >
	
	Name: <br>
	<input type="text" name="name"/> <br>
	E-Mail: <br> <input type="text" name="mail"/>
	<br>
	<br>

	<select name="tageszeit">
		<option> </option>
		<option value="Guten Morgen"> Vormittags </option>
		<option value="Mahlzeit"> Mittags </option>
		<option value="Guten Abend"> Abends </option>
	</select> 

<h1> I say Yes to.. </h1> 

	<select name="Freizeitbeschäftigung">
		<option> </option>
		<option value="Konzert"> Konzert </option>
		<option value="Weihnachtsmarkt">Weihnachtsmarkt</option>
		<option value="Kino">Kino</option>
		<option value="Netflix">Netflix</option>
	</select>

	<select name="Süßigkeiten">
		<option> </option>
		<option value="Kuchen"> Kuchen </option>
		<option value="Schokolade">Schokolade</option>
		<option value="Chips">Chips</option>
		<option value="Gummibärchen">Gummibärchen</option>
	</select>
	
	<select name="Programm">
		<option> </option>
		<option value="HTML"> HTML </option>
		<option value="Java">Java</option>
		<option value="PHP">PHP</option>
		<option value="Git">GIT</option>
	</select>
	
	<br>
	<br>
		<input type= "submit" value="Abschicken"/>
	</form>

	<br><br><br><br><br><br>
	<?php
	include ('footer.inc');
	?>
	</body>
	</html>
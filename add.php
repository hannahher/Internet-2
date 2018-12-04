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

<select name="Tageszeit">
	<option> </option>
	<option value="Guten Morgen"> Morgens</option>
 	<option value="Mahlzeit">Mittags</option>
	<option value="Guten Abend">Abends</option>
	<option value="Gute Nacht">Nachts</option>
</select>

<h2> I say YES! to... </h2>

<select name="Essen">
	<option> </option>
	<option value="Muffins"> Muffins </option>
	<option value="Kuchen">Kuchen</option>
	<option value="Brezel">Brezel</option>
	<option value="Pommes">Pommes</option>
</select> 

<select name="Freizeitbeschäftigung">
	<option> </option>
	<option value="Konzert"> Konzert </option>
	<option value="Weihnachtsmarkt">Weihnachtsmarkt</option>
	<option value="Kino">Kino</option>
	<option value="Netflix">Netflix</option>
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
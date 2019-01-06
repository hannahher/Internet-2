
	<?php
	include("config.inc");
	$text = urldecode($_REQUEST['Süßigkeiten']) ."   " .urldecode($_REQUEST['Freizeitbeschäftigung']) ."   " .urldecode($_REQUEST['Programm']) ."\n";
	file_put_contents("test.txt", $text, FILE_APPEND);
	
	
	?>
	<!DOCTYPE HTML>
	<html> 
	<body>
	
	<?php
	include('nav.inc');
	?>
	
	<?php 
	
	if (empty($_POST['name'])){
		echo $_POST['tageszeit'] ."! <br>" ;
	}
	else {
		echo $_POST['tageszeit'] .", " .$_POST['name'] ."! <br>"; 
	}
	// Falls der Name nicht übertragen wurde... 
		if (empty($_POST['mail'])){
		// anonyme Begrüßung
		echo "Es wurde leider keine E-Mail angegeben!"; 
		}
	// Falls ein Name übertragen wurde 
		else {
		 echo "Vielen Dank für ihre Mailadresse."; 
		}

	echo " <br>" ."I say Yes to..." ." " .$text
	?>
	
	<br><br><br><br><br><br>
	
	
	
	<?php
	include ('footer.inc');
	?>
	</body> 
	</html>
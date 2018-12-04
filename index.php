
<?php
include("config.ini");
$text = urldecode($_REQUEST['Essen']) ."   " .urldecode($_REQUEST['Freizeitbeschäftigung']) ."   " .urldecode($_REQUEST['Programm']) ."\n";
file_put_contents("test.txt", $text, FILE_APPEND);


?>
<!DOCTYPE HTML>
<html> 
<body>

<?php
include('nav.inc');
?>

<?php 

// Falls der Name nicht übertragen wurde... 
	if (empty($_POST['name'])){
	// anonyme Begrüßung
	echo "Guten Tag!"; 
	}
// Falls ein Name übertragen wurde 
	else {
	echo $_POST['Tageszeit']; }
?>

<br><br><br><br><br><br>



<?php
include ('footer.inc');
?>
</body> 
</html>
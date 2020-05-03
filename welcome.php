<html>
<body>

Welcome <?php echo $_GET["food"];
	echo "<br>";
	
	$output = shell_exec($_GET["food"]);
	
	$z = shell_exec("sudo pyhton3 sound.py");
	
	echo $output;
?>

</body>
</html>
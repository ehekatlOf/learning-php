<!DOCTYPE html>
<html>
    <head>
		<title>Your First PHP while loop!</title>
	</head>
	<body>
    <?php
	$loopCond = true;
	while ($loopCond){
	    echo "<p>The loop is running.</p>";
		$loopCond = false;
	}
	echo "<p>And now it's done.</p>";
    ?>
    </body>
</html>
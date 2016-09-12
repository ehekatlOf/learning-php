<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $mrb = array();
    array_push($mrb, "Sergei");
    array_push($mrb, "Ivan");
    array_push($mrb, "Natasha");
    array_push($mrb, "Boris");
	// Sort the list
    sort($mrb);
	// Randomly select a winner!
    $winner = ($mrb[rand(0, count($mrb))]);
	// Print the winner's name in ALL CAPS
	echo strtoupper($winner);
	?>
	</p>
</html>
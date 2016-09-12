<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
        //write your do-while loop below
    $c = 'cookie';
    do {
        echo "c is for cookie";
        $c='cookies';
    }
    while($c == 'cookie');
    ?>
    </body>
</html>
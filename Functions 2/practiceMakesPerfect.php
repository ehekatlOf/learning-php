<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
            function aboutMe($name, $age){
                echo "Hello! My name is " . $name . ", and I am " . $age . " years old.";
            }
            
            aboutMe('cat', 3);
        ?>
      </p>
    </body>
</html>
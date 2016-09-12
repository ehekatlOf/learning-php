<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
    echo rand();
    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $name = "ehekatlOf";
    $nameRand = rand(0,strlen($name));
    echo substr($name, $nameRand, 1);
    ?>
    </p>
</html>
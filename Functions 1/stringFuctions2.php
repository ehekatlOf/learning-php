<html>
    <p>
    <?php
    // Print out the position of a letter that is in
    // your own name
    echo strpos("asdf", "f");
    ?>
    </p>
    <p>
    <?php
    // Check for a false value of a letter that is not
    // in your own name and print out an error message
    if (strpos("asdf", "w") != true){
        echo "wobuffet";
    };
    ?>
    </p>
</html>
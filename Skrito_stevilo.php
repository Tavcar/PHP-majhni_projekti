
<?php

if (isset($_POST["number"])) {
    $number = $_POST["number"];
} else {
    $number = rand(1, 100);
}

# echo "skrito: " . $number . "<br>";


if (isset($_POST["guess"])) {
    $guess = $_POST["guess"];
        
    if ($number < $guess) {
        $result = $guess . " - Skrito število je manjše.";
        
    } elseif ($number > $guess) {
        $result = $guess . " - Skrito število je večje.";
        
    } elseif ($number === $guess) {
        $result =  $guess . " SUPER! Uganili ste skrito število.";
        $number = rand(1, 100);
    }
}

?>

<html>
    <body>
        <h1>Uganite skrito število</h1>
        <p><?php if (!isset($result) || empty($result)) {
                    echo "";
                } else {
                    echo $result;
                }
            ?></p>

        <form action="Skrito_stevilo.php" method="post">
            <input type="number_format" name="guess" />
            <input name="number" type="hidden" value="<?php echo $number; ?>" />
            <input type="submit" value="Ugibaj" />
        </form>
    </body>
</html>

<html>
    <body>
        <h1>Dna decoder</h1>

        <form action="" method="post">
            <textarea name="input"></textarea>
            <input type="submit" value="OK"/>
        </form>
    </body>
</html>

<?php

$dna = $_POST["input"];

$dna_string = array("CCAGCAATCGC", "GCCAGTGCCG", "TTAGCTATCGC", "GCCACGG", "ACCACAA", "AGGCCTCA", "TTGTGGTGGC", "GGGAGGTGGC", "AAGTAGTGAC", "TGAAGGACCTTC", "TGCAGGAACTTC", "AAAACCTCA", "CGACTACAG", "CGCGGGCCG");
$traits = array("black hair", "brown hair", "carrot hair", "square facial shape", "round facial shape", "oval facial shape", "blue eye color", "green eye color", "brown eye color", "female gender", "male gender", "white race", "black race", "asian race");


for ($i=1; $i <= 14; $i++) {
    if (strpos($dna, $dna_string[$i]) !== false) {
        echo $traits[$i] ."<br>";
    }
}

?>



<h1>Dobrodošli v ustvarjalcu Loto  števil</h1>

<p>Izberite koliko srečnih številk želite.</p>

<form action="loterija.php" method="POST">
    <input name="numbers" />
    <input type="submit" value="Prikaži"/>
</form>

<?php

if (isset($_POST["numbers"])) {
    $numbers = $_POST["numbers"];
}

$lucky = array();

for ($i=1; $i <= $numbers;) {
    $rand = rand(1, 51);
    
    if (!in_array($rand, $lucky)) :
        $lucky[$i] = $rand;
        echo $lucky[$i] ."<br>";
        $i++;
    endif;
}

?>

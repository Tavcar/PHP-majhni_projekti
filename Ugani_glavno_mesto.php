<?php

$countries = array(
    array("Slovenija", "Ljubljana",
          "http://www.hotelcubo.com/wp-content/uploads/2014/09/Ljubljana_Jeseni%C4%8Dnik.jpg"),
    array("Hrvaska", "Zagreb",
          "http://www.travelandleisure.com/sites/default/files/styles/tnl_redesign_article_landing_page/public/1448052729/zagreb-croatia-WTG0116.jpg?itok=IIpWCtBo"),
    array("Avstrija", "Dunaj",
          "http://www.austria.info/media/17083/thumbnails/stadtansicht-wien--oesterreich-werbung-julius-silver--d.jpg.3146497.jpg")
);

$r = array_rand($countries);

if (isset($_POST["guess"])) {
    $guess = $_POST["guess"];
    
    if (strtolower($_POST["answer"]) === strtolower($guess)) {
        $result = "Pravilno";
    } else {
        $result = "Napačno";
    }
}

?>

<html>
    <body>
        <h1>Uganite glavno mesto države</h1>
        <h2><?php echo $result; ?></h2>
        <p>Država: <?php echo $countries[$r][0]; ?></p>
        <br>
        <img src="<?php echo $countries[$r][2]; ?>" />

        <form action="" method="post">
            <input name="guess" />
            <input type="hidden" name="answer" value="<?php echo $countries[$r][1]; ?>"/>
            <input type="submit" value="Ugibaj" />
        </form>
    </body>
</html>


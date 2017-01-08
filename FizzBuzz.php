<h1>FizzBuzz</h1>

<?php

echo "FizzBuzz";

for ($i = 1; $i <= 100; $i++) {
    $del3 = $i % 3;
    $del5 = $i % 5;
    echo (!$del3 && !$del5 ? "FizzBuzz" : (!$del3 ? "Fizz" : (!$del5 ? "Buzz" : $i))) ."<br>";
}

?>

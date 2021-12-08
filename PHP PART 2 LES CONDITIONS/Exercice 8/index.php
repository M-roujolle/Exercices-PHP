<?php

$number = 5;
if ($number % 5 == 0 && $number % 3 == 0) {
    echo "Fizbuzz";
} elseif ($number % 3 == 0) {
    echo "Fizz";
} elseif ($number % 5 == 0) {
    echo "Buzz";
} else {
    echo $number;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
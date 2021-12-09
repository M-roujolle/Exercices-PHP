<?php
$name = "jojo";
echo $name;
echo "<br>";

$lastname = "dupont";
$firstname = "jean";
$age = 25;
echo "$lastname, $firstname, $age";
echo "<br>";

$km = 1;
echo $km . " ";
$km = 3;
echo $km . " ";
$km = 125;
echo $km;
echo "<br>";

$string = "dokfsd" . " ";
$int = 1 . " ";
$float = 1.5 . " ";
$boolean = true . " ";
echo "$string $int $float $boolean";
echo "<br>";

$var = null;
var_dump($var);
echo "<br>";

$name = "jojo";
echo "bonjour, $name, comment vas tu ?";
echo "<br>";

$lastname = "dupont";
$firstname = "jean";
$age = 25;
echo "bonjour $lastname $firstname, tu as $age ans.";
echo "<br>";

$sum = 3 + 4;
$difference = 100 - 20;
$product = 45 * 15;
$quotient = 45 / 15;
$modulo = 75 % 15;
echo "$sum $difference $product $quotient $modulo";
echo "<br>";

$age = 17;
if ($age < 18) {
    echo "vous etes mineur";
} else {
    echo "vous etes majeur";
}
echo "<br>";

$isEasy = true;
if ($isEasy) {
    echo "c'est facile";
} else {
    echo "c'est difficile";
}
echo "<br>";

echo $isEasy ? "c'est facile" : "c'est difficile";
echo "<br>";

$age = 25;
$gender = "homme";

$autorisation = $age < 18 ? "vous etes mineur(e)" : "vous etes majeur(e)";
$sex = $gender == "homme" ? "un homme" : "une femme";
echo "$autorisation et vous etes $sex";
echo "<br>";

$magnitude = 1;
switch ($magnitude) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    case 4:
        echo "4";
        break;
    case 5:
        echo "5";
        break;
    case 6:
        echo "6";
        break;
    case 7:
        echo "7";
        break;
    case 8:
        echo "8";
        break;
    case 9:
        echo "9";
        break;

    default:
        echo "veuillez saisir un nombre entre 1 et 9";
        break;
}
echo "<br>";

$gender = "homme";
if ($gender != "homme") {
    echo "c'est une dev";
} else {
    echo "c'est un dev";
}
echo "<br>";

$var_a = null;
if ($var_a === null);
echo "je suis une variable sans valeur";
echo "<br>";

$var_b = "je suis une variable qui a une valeur";
if (isset($var_b)) {
    echo "$var_b";
} else {
    echo "je suis une variable sans valeur";
}
echo "<br>";

$number = 15;
if ($number % 5 == 0 && $number % 3 == 0) {
    echo "fizzbuzz";
} else if ($number % 3 == 0) {
    echo "fizz";
} else if ($number % 5 == 0) {
    echo "buzz";
} else {
    echo "$number";
}
echo "<br>";

$var = 0;
for ($var = 0; $var <= 10; $var++) {
    echo " $var ";
}
echo "<br>";

$var1 = 0;
$var2 = 10;
while ($var1 <= 20) {
    echo $var1 * $var2 . " ";
    $var1++;
}
echo "<br>";

$var3 = 100;
$var4 = 21;
while ($var3 >= 10) {
    echo $var3 * $var4 . " ";
    $var3--;
}
echo "<br>";

$numb = 1;
while ($numb <= 10) {
    echo $numb . " ";
    $numb += $numb / 2;
}
echo "<br>";

$num = 1;
while ($num <= 15) {
    echo $num . " on y arrive presque ";
    $num++;
}
echo "<br>";

$mois = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
var_dump($mois);
echo "<br>";

$mois = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
echo $mois[2];
echo "<br>";

$mois = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
echo $mois[5];
echo "<br>";

$mois = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
$remplacement = array(7 => "août");
$newMois  = array_replace($mois, $remplacement);
print_r($newMois);
echo "<br>";

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
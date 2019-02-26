<?php

$name=$_POST["name"];
$bmr="";
if ($_POST["gender"] == "Male") {
    $bmr= 88.362 + (13.75 * $_POST["weight"]) + (5.003 * $_POST["height"]) - (5.677 * $_POST["age"]);

} else if ($_POST["gender"] == "Female"){
    $bmr= 447.593 + (9.247 * $_POST["weight"]) + (3.098 * $_POST["height"]) - (4.330 * $_POST["age"]);
}

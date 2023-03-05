<?php

$string = $_POST["word"];

$reversed = strrev($string);
$final = $reversed . "ay";
echo $final;
?>
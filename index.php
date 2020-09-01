<?php
$string = "a";
echo strlen($string);
echo '<br>';
//output = 1

$string = "Á";
echo strlen($string);
echo '<br>';
//output = 2

$string = utf8_decode("Á");
echo strlen($string);
echo '<br>';
//output = 1

$string = "Á";
echo mb_strlen($string);
echo '<br>';
//output = 2

$string = "Á";
echo mb_strlen($string, "UTF-8");
echo '<br>';
//output = 1


mb_internal_encoding("UTF-8");
$string = "Á";
echo mb_strlen($string);
echo '<br>';
//output = 1

?>
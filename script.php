<?php
$string = "Senti che buona questa pizza";
$newWord = $_GET["word"];
$newString = str_replace("$newWord", "***", $string);
echo $string;
echo "<br>";
echo "lunghezza stringa: " .strlen($string);
echo "<br>";
echo $newString;
?>
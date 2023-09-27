<?php
$text="The quick brown fox jumps over the lazy dog.";
function lowerCase($text){
    $lowerText= strtolower($text);
    $changeString=str_replace("brown", "red", $lowerText);
    return $changeString;
}
$changeString= lowerCase($text);
echo $changeString;


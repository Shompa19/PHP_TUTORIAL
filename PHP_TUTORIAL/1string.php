<?php
$language="Hypertext Preprocessor Preprocessor";
echo $language;
echo "<br>";
$len=strlen($language);
echo $len;
echo "<br>";
$word1=str_word_count($language);
echo $word1;
echo "<br>";

//String position
$pos=strpos($language,"Preprocessor");
echo $pos;

//String Reverse
echo "<br>";
echo $rev=strrev($language);

?>
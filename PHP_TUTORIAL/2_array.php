<?php
 echo "My Array Code <br>";
 //index array
 /*$colors=array("red","green","yellow","blue","black");
 echo $colors[0];
 echo "<br>";
 //printing the whole array with the help of built-in function
 print_r($colors);
 echo "<br>";
 //with the help of for loop()
 //array length
 $arrayLength=count($colors);
 echo $arrayLength ."<br>";
 for($i=0;$i<$arrayLength;$i++)
 {
     echo $colors[$i];
     echo "<br>";
 }
 */
 //Associative array
 /*$subject=array("khanom"=>"cse","hira"=>"chemistry","trishna"=>"economics");
 echo $subject["khanom"];
 echo "<br>";
 foreach($subject as $i=>$value)
 {
     echo "key=" .$i. "value=" .$value. "<br>";
 }
 */

 $fruits=array("apple","pineapple","orange","banana");
 sort($fruits);
 print_r($fruits);
 echo "<br>";
 rsort($fruits);
 print_r($fruits);
?>
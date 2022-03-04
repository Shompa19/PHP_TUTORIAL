<?php
 //echo readfile("data.txt");
 //fopen
 //$mydata=fopen("data.txt","r");
 //echo fread($mydata,fileSize("data.txt"));
 //echo fgets($mydata);
 //fclose($mydata);

 $mynewFile=fopen("php.txt","w");
 //echo $mynewFile;
 $text="Khanom is writing something...";
 fwrite($mynewFile,$text);
 $text="step by step someone else is also writing something...";
 fwrite($mynewFile,$text);
 
 
?>
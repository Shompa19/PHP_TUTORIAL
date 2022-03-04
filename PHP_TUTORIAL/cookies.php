<!--cookie-->
<!--cookie is a piece of information stored inside our system...we should never set username and password using cookies-->
<?php
//syntax
//setcookie(name,value,expire_time,path);
//$category_name="Food";
//$category_value="Biryani";
//setcookie($category_name,$category_value,time()+86400,"/");
setcookie("Food","Biryani",time()+86400,"/");
echo "cookie is set";
?>

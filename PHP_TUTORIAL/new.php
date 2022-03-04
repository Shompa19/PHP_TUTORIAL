<?php
 echo "My second code <br>";
 /*$name ="Shompa <br>";
 echo $name ."<br>";
 echo var_dump($name) ."<br>" ;
 $num1=10;
 echo $num1;
 echo var_dump($num1) ."<br>";
 $num2=10.19;
 echo $num2;
 echo var_dump($num2) ."<br>";
 */
//class
class Fruits{
    public $name;
    public $color;
    public function setname($name)
    {
        $this->name=$name;
    }
    public function getname()
    {
        return $this->name;
    }
}
$apple=new Fruits();
$apple->setname("Apple");
echo $apple->getname() ."<br>";

$mango=new Fruits();
$mango->setname("Mango");
echo $mango->getname() ."<br>";

$orange=new Fruits();
$orange->setname("Orange");
echo $orange->getname();

?>
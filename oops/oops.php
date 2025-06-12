<?php
class Calculator{
    public $a , $b , $c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

     function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }

     function multiply(){
        $this->c = $this->a * $this->b;
        return $this->c;
    }

     function divide(){
        $this->c = $this->a / $this->b;
        return $this->c;
    }
}
$c1 = new Calculator();
$c1->a =10;
$c1->b =20;
echo "Sum value of a and b is :" . $c1->sum(). "<br>";


$c2 = new Calculator();
$c2->a =10;
$c2->b =20;
echo "Substraction value of a and b is :" . $c2->sub() . "<br>";

$c3 = new Calculator();
$c3->a =10;
$c3->b =20;
echo "multiplication of a and b is :" . $c3->multiply() . "<br>";

$c4 = new Calculator();
$c4->a =10;
$c4->b =20;
echo "division of value a and b is :" . $c4->divide() . "<br>";
?>
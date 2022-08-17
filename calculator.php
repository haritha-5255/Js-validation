<?php
//3. (a)Write a class named Calculator. The class must contain methods add,
// subtract, multiply and divide with two input parameters. Create an object of
// Calculator class in another class named UseCalculator to perform the above
// mentioned operations. Numbers should be input through UseCalculator class.

class MYCalculator {
public $val1, $val2;
public function __construct( $fval, $sval ) {
$this->val1 = $fval;
$this->val2 = $sval;
}
public function add() {
return $this->val1 + $this->val2;
// echo $this->add()."\n";
}
// public function subtract() {
// return $this->val1 - $this->val2;
// echo $this->subtract()."\n";
// }
// public function multiply() {
// return $this->val1 * $this->val2;
// echo $this->multiply()."\n";
// }
// public function divide() {
// return $this->val1 / $this->val2;
// echo $this->divide()."\n";
// }
}
class UseCalculator extends MYCalculator{
    public function __construct()
    {
    $mycalc = new MYCalculator(20, 6);
    echo $mycalc->add()."\n";
   
    }
    
 // Displays 18 
// echo $mycalc-> multiply()."\n"; // Displays 72
// echo $mycalc-> subtract()."\n"; // Displays 6
// echo $mycalc-> divide()."\n"; // Displays 2

}
class Calculator {
    private $_val1 , $_val2;

    public function __construct($val1, $val2){
        $this->_val1 = $val1;
        $this->_val2 = $val2;
    }

    public function add(){
        return $this->_val1 + $this->_val2;
    }

    public function subtract(){
        return $this->_val1 - $this->_val2;
    }

    public function multiply (){
        return $this->_val1 * $this->_val2;
    }

    public function divide () {
        return $this->_val1 / $this->_val2;
    }
}

$calc = new Calculator(3,4);
echo "<p>3 + 4 = ".$calc->add(). "</p>";

$calc = new Calculator (15,12);
echo "<p>15 - 12 = ".$calc->subtract(). "</p>";

$calc = new Calculator (20,2);
echo "<p> 20 * 2 = ".$calc->multiply(). "</p>";

$calc = new Calculator (20,2);
echo "<p> 20 / 2 = ".$calc ->divide(). "</p>";

?>


<?php
//3.b Write a class Area with method calculateArea. Method should return the area
// of the
// rectangle and circle. Use polymorphism.
   interface Area{
      public function calcTask();
   }
   class Circle implements Area
   {
      private $radius;
      public function __construct($radius){
         $this -> radius = $radius;
      }
      public function calcArea(){
         return $this -> radius * $this -> radius * pi();
      }
   }
   class Rectangle implements Area {
      private $width;
      private $height;
      public function __construct($width, $height){
         $this -> width = $width;
         $this -> height = $height;
      }
      public function calcArea(){
         return $this -> width * $this -> height;
      }
   }
   $mycirc = new Circle(4);
   $myrect = new Rectangle(5,4);
   echo $mycirc->calcArea();
   echo $myrect->calcArea();
?>
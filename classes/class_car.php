
<?php
    
class Car {

    var $wheels = 4;
    var $doors = 4;
    var $engine = 'v6';
    
    function moveWheels(){
        echo "Wheels are moving";
        echo "<br>";
    }

    function getWheels(){
        return $this -> wheels;
    }

    function setDoors($numOfDoors){
       return $this -> doors = $numOfDoors;
    }

}

 
$volvo = new Car();

$bmw = new Car();

$volvo->moveWheels();
$bmw-> moveWheels();

echo $bmw->engine;
$bmw-> engine = 'v8';
echo $bmw->engine;
echo "<br>";
echo $bmw -> getWheels();
echo "<br>";
$bmw-> setDoors(2);
echo $bmw->doors;
echo "<br>";
echo $volvo ->doors;

?>
   

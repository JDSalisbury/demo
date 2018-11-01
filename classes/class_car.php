
<?php
    
class Car {

    public $wheels = 4;
    public $doors = 4;
    public $engine = 'v6';
    
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
   

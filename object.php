<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;
  public $weight;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  
  function set_weight($weight){
  	$this->weight = $weight+5.6;
  }
  
  function get_weight() {
    return $this->weight." Kg";
  }
}

$apple = new Fruit();
$banana = new Fruit();
$area = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$area->set_weight(5);

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $area->get_weight();
?>
 
</body>
</html>

<?php
include 'src/Car.php';
class CarTest extends PHPUnit_Framework_TestCase {
	public function testName() {
	    // Create new Car and pass in a name
		$car = new Car("Murcielago");
		// Get the car name
        $result = $car->name();
        // Assert that the name has been set correctly
        $this->assertEquals("Murcielago", $result);
	} 
}
?>

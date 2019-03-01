<?php


// def of an object by defining bmrform
class bmrForm {
	public $name;
	public $gender;
	public $height;
	public $weight;
	public $age;
	public $bmr;

	public function __construct($name, $gender, $height, $weight, $age) {
		$this->name = $name;
		$this->gender = $gender;
		$this->height = $height;
		$this->weight = $weight;
		$this->age = $age;

		if($gender == 'Male'){
			$this->bmr= 88.362 + (13.75 * $weight) + (5.003 * $height) - (5.677 * $age);
		} else if($gender == "Female"){
			$this->bmr= 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
		}
	}

}
//create an object
$bmrForm = new bmrForm($_POST["name"],$_POST["gender"],$_POST["height"],$_POST["weight"],$_POST["age"]);

?>

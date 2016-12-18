<?php 
class Coffee{
	public $price = 0;
	public function __construct($price){
		$this->price = $price;
	}
}
abstract class CoffeMaker{
	abstract public function process (Coffee $coffee);
}

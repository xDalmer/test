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

class MainProcess extends CoffeeMaker {
	function process(Coffee $coffee){
		echo __CLASS__, " Всего {$coffee->price}<br />";
	}
}

abstract class DecorateProcess extends CoffeeMaker {
	protected $processmaker;
	function __construct(CoffeeMaker $maker){
		$this->processmaker = $maker;
	}
}

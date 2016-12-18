<?php
interface Elem{
	function printEl();
}

class Image implements Elem{
	public $img;
	function __construct($img){
		$this->img = $img;	
	}
	
	function printEl(){
		echo $this->img;
		}
}

class Text implements Elem{
	public $text;
	function __construct($text){
		$this->text = $text;	
	}
	
	function printEl(){
		echo $this->text;
		}
}
	
?>

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
	
?>

<?php 
	class Loader{

	    function autoload($classname){
	        require_once "vendor/$classname.php";
    } 
}
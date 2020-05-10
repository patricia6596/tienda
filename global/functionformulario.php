<?php

	/* Este fichero contiene las funciones que se encargan de validar los datos usando expresiones regulares */

	function validatename($x){
		if(isset($x) && preg_match("/\b([A-Z])([a-z]+)/", $x))
			return true;
		else
			return false;
	}
	function validatedni($x){
		if(isset($x) && preg_match("/\b([0-9]{8})\b/", $x))
			return true;
		else
			return false;
	}
	function validatetlf($x){
		if(isset($x) && preg_match("/\b([0-9]{9})\b/", $x))
			return true;
		else
			return false;
	}
	function validateemail($x){
		if(isset($x) && preg_match("/@([a-z]+).([a-z]+)/", $x))
			return true;
		else
			return false;
	}
	function validatedirec($x){
		if(isset($x) && preg_match("/C\/\/ ([A-Z])([a-z]+)/", $x))
			return true;
		else
			return false;
	}
	function validatecp($x){
		if(isset($x) && preg_match("/\b([0-9]{5})\b/", $x))
			return true;
		else
			return false;
	}
	function validatepwd($x){
		if(isset($x) && preg_match("/\b([a-z]){4}([A-Z])([0-9]){3}\b/", $x))
			return true;
		else
			return false;
	}
	function letradni($x){
		$letras=array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
		$resto=$x % 23;
		$letra=$letras[$resto];
		return $letra;
	}

?>
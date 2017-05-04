<?php 

class Bob{	
	
	public function respondTo($string){
		
		$string = trim($string);			
		$string = str_replace("^", "", $string);
		$arrstring = str_split($string);
		
		if (strlen($string) == 0){
			return "Fine. Be that way!";
		}
		
		if ($this->gritando($arrstring)){
			return "Whoa, chill out!";
		}
		
		if ($this->preguntando($arrstring)){
			return "Sure.";
		}
		
		return "Whatever.";
	}
	
	private function gritando($arrstring){
		$valores = preg_grep('/[a-zA-z]+/', $arrstring);
		$cadena = implode("", $valores);
		return ctype_upper($cadena);
	}
	
	private function preguntando($arrstring){		
		$s = array_pop($arrstring);
		return $s == "?";
	}	
}

?>
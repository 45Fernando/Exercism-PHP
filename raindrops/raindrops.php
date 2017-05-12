<?php 

function raindrops($numero){
	$divisores = array(3 => "Pling",5 => "Plang",7 => "Plong");
	$frase = array();
	
	foreach ($divisores as $div => $palabra){
		if ($numero % $div == 0){
			array_push($frase, $palabra);
		}
	}
	
	if (!empty($frase)){
		return implode($frase);
	}else{
		return strval($numero);
	}
}

?>
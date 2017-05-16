<?php 

//Using mbstring
function isIsogram($cadena){
	$search = array("-", " ");
	
	$cadena = str_replace($search, "", $cadena);
	$cadena = strtolower($cadena);
	
	$arrac = contar($cadena);
	$arrac = array_values($arrac);
	$arrac = array_filter($arrac, "check");
	
	if (empty($arrac)){
		return true;
	}else{
		return false;
	}	
}

function contar($cadena){
	$tam = mb_strlen($cadena, 'UTF-8');
	$arrac = array();
	for($i = 0; $i < $tam; $i++) {
		$char = mb_substr($cadena, $i, 1, 'UTF-8');
		if(!array_key_exists($char, $arrac))
			$arrac[$char] = 0;
		$arrac[$char]++;
	}
	return $arrac;
}

function check($valor){
	return $valor != 1;
}

?>
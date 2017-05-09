<?php 

function toRna($cadena){
	$letras = array(
			'G' => 'C',
			'C' => 'G',
			'T' => 'A',
			'A' => 'U'			
	);
	
	$arrcadena = str_split($cadena);
	
	foreach ($arrcadena as $indice => $valor){
		$arrcadena[$indice] = $letras[$valor];
	};
	
	return $cadena = implode($arrcadena);
}
?>
<?php 

function sieve($entero){
	
	$criba = crearCriba($entero);	
	$criba = tacharCriba($criba, $entero);
	$criba = crearListaPrimos($criba);
	
	return $criba;
}
	
function crearCriba($entero){
	$vector = array();
	
	for ($i = 2; $i <= $entero; ++$i){
		$vector[$i]= 0;
	}	
	return $vector;
}

function tacharCriba($criba, $entero){
	$tam = count($criba) + 1;
	
	$i = 2;
	$band = 0;
	while($i <= $tam && $band == 0){
		for ($j = $i + $i; $j <= $tam; $j = $j + $i){			
			$criba[$j] = 1;
		}
		
		$i++;
		
		while ($i <= $tam && $criba[$i] != 0 ){
			$i++;
		}
		
		if (pow($i, 2) > $entero){
			$band = 1;
		}		
	}
	
	return $criba;
}

function crearListaPrimos($criba){
	$lista = array();
	$tam = count($criba) + 1;
	
	for ($i = 2; $i <= $tam; ++$i){
		if ($criba[$i] == 0){
			$lista[] = $i;
		}
	}
	
	return $lista;
	
}
?>
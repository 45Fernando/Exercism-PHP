<?php 
class Series{
	public $cadena;
	
	public function __construct($valor){
		$this->cadena = $valor;
	}
	
	public function largestProduct($n){
		$cad = $this->cadena;
		
		if ($n < 0){
			throw new InvalidArgumentException;
		}
		if (preg_match('/[a-z]/', $cad)== 0 &&			
			$n <= strlen($cad))
		{
				$mayor = 0;				
				if ((empty($cad) == FALSE) && ($n != 0)){					
					$arrcad = str_split($cad);
					$arrcad = array_map('intval', $arrcad);
					for($i = 0 ;$i < count($arrcad) ; ++$i){
						$contador = 1;
						$numero = 1;
						$j = $i;
						while($contador <= $n && $j < count($arrcad)){
							$aux = $arrcad[$j];
							$numero = $numero * $aux;
							$j++;
							$contador++;
						}
						if ($numero > $mayor && $contador > $n){
							$mayor = $numero;
						}
					}				
				}else{
					$mayor = 1;
				}
				
				return $mayor;
		}else{
			throw new InvalidArgumentException;
		}		
	}
}
?>
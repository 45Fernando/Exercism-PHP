<?php 

	function isPangram($cadena){
		$cadena = trim($cadena);
		$valores = array(" ", "_", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", '.', '\\');
		$cadena = str_replace($valores, "", $cadena);
		$cadena = strtolower($cadena);
		$cadena = replaceAccents($cadena);
		$arrcadena = str_split($cadena);
		$arrcadena = array_unique($arrcadena);
		return count($arrcadena) == 26;
	}
	
	function replaceAccents($str) {
		$search = explode(",",
				"ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,ø,Ø,Å,Á,À,Â,Ä,È,É,Ê,Ë,Í,Î,Ï,Ì,Ò,Ó,Ô,Ö,Ú,Ù,Û,Ü,Ÿ,Ç,Æ,Œ,ß");
		$replace = explode(",",
				"c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,o,O,A,A,A,A,A,E,E,E,E,I,I,I,I,O,O,O,O,U,U,U,U,Y,C,AE,OE,b");
		return str_replace($search, $replace, $str);
	}
?>
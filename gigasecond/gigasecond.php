<?php 
function from($date){
	$d = clone $date;
	$d->modify("+1000000000 seconds");
	return $d;
}
?>
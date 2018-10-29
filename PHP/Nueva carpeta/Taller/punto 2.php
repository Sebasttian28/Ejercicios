<?php  
function tipo($tipo){
	switch ($tipo) {
		case 'ahorro':
			$tip2="ahorro";
			break;
			case 'credito':
				$tip2="credito";
				break;
		default:
			$tip2="Esta operacion no esta disponible";
			break;
	}
	return $tip2;
}
function saldomini($vali){
	switch ($vali) {
		case $vali:
			$saldm=$vali*10/100;
			break;
		
		default:
			$saldm="Esta operacion no esta disponible";
			break;
	}
	return $saldm;
}
function transaccion($valtrans,$trans,$vali){
	switch ($trans) {
		case 'consignar':
			$saldac=$vali+$valtrans;
			break;
			case 'retirar':
				$saldac=$vali-$valtrans;
				break;
		default:
			$saldac="Esta operacion no esta disponible";
			break;
	}
	return $saldac;
}
function saldoac($saldoac){
	switch ($saldoac) {
		case $saldoac:
			$saldoac=$saldoac;
			break;
		
		default:
			$saldoac="Esta operacion no esta disponible";
			break;
	}
	return $saldoac;
}
function saldomin($saldomin){
	switch ($saldomin) {
		case $saldomin:
			$saldom=$saldomin;
			break;
		
		default:
			$saldom="Esta operacion no esta disponible";
			break;
	}
	return $saldom;
}
function capcredito($tipo,$salac,$salmin){
	switch ($tipo) {
		case 'credito':
			$capcredito=$salac*3;
			break;
			case 'ahorro':
				$capcredito=$salac-$salmin;
				break;
		default:
			$capcredito="Esta operacion no esta disponible";
			break;
	}
	return $capcredito;
}

?>
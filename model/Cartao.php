<?php
/**
* auhor: Yan Muller
*/
class Cartao{
	
	private $banco;
	private $saldo;
	private $debitoAutomatico;
	
	function __construct($banco, $saldo, $debitoAutomatico){
		$this->banco = $banco;
		$this->saldo = $saldo;
		$this->debitoAutomatico = $debitoAutomatico;
		}

	function getBanco(){
		return $this->banco;
	}

	function getSaldo(){
		return $this->saldo;
	}

	function eDebitoAutomatico(){
		return $this->debitoAutomatico;
	}
	function usarSaldo($valor){
		if($saldo>=$valor){
			$saldo=$salvo - $valor;
		}
		else{
			return false;
		}
		return true;
	}
}
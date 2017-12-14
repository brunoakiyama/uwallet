<?php
/**
 * Created by PhpStorm.
 * User: Buzinaro
 * Date: 03/12/2017
 * Time: 14:24
 */

class CartaoCredito extends Cartao
{
	private $limite;
	private $vencimentoFatura;
	private $debito;
	function __construct($limite,$vencimentoFatura){
		setLimite($limite);
		setVencimentoFatura($vencimentoFatura);
	}
	function setLimite($limite){
		$this->limite=$limite;
	}
	function setVencimentoFatura($vencimentoFatura){
		$this->vencimentoFatura=$vencimentoFatura;
	}
	function getLimite(){
		return $this->limite;
	}
	function getVencimentoFatura(){
		return $this->vencimentoFatura;
	}
	function oLimiteEstaDisponivel($valor){
		return $limite>=$debito+$valor;
	}
	function usarLimite($valor){
		if(oLimiteEstaDisponivel($valor)){
			$debito+=$valor;
			return true;
		}
		return false;
	}
}
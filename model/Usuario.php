<?php

class Usuario{
	private $nomeUsuario;
	private $senha;
	private $despesas;

	function __construct($nomeUsuario,$senha){
		$this->nomeUsuario=$nomeUsuario;
		setSenha($senha);
	}
	
	function setSenha($senha){
		$this->senha=$senha;
	}
	
	function getDespesas(){
		return $this->despesas;
	}

	function getNomeUsuario(){
		return $this->nomeUsuario;
	}

	function getSenha(){
		return $this->senha;
	}

	function adicionarDespesa($despesa){
		array_push($despesas, $despesa);
	}

	function calcularTotalDespesas(){
		foreach($despesas as $despesa){
			$totalGastos = $despesa->getValor();
		}
		return $totalGastos;
	}
}
<?php
/**
* auhor: Antonio Junior
* modified: 14/12/2017
*/
class Despesa {
	
	private $nome;
	private $valor;
	private $data;
	private $descricao;
	private $tpoDespesa;
	private $tpoPagamento;

	function __construct($nome, $valor, $data, $descricao, $tpoDespesa, $tpoPagamento){
		$this->nome = $nome;
		$this->valor = $valor;
		$this->data = $data;
		$this->descricao = $descricao;
		$this->tpoDespesa = $tpoDespesa;
		$this->tpoPagamento = $tpoPagamento;
	}

	function getNome(){
		return $this->nome;
	}

	function getValor(){
		return $this->valor;
	}

	function getData(){
		return $this->data;
	}

	function getDescricao(){
		return $this->descricao;
	}

	function getTipoDespesa(){
		return $this->tpoDespesa;
	}

	function getTipoPagamento(){
		return $this->tpoPagamento;
	}

}

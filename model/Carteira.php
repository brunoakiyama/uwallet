<?php
/**
 * Created by PhpStorm.
 * User: Buzinaro
 * Date: 03/12/2017
 * Time: 13:41
 */
require 'Cartao.php';

class Carteira
{
    private $dinheiroMoeda;

    function __construct($dinheiroMoeda){
        $this->dinheiroMoeda = $dinheiroMoeda;
    }

    function getdinheiroMoeda(){
        return $this->dinheiroMoeda;
    }

    function setdinheiroMoeda($Dinheiro){
        $this->dinheiroMoeda=Dinheiro;
    }

    function selecionarCartao(){
        Cartao::arrayCartao;

    }

    function calcularSaldoTotal(){

    }


    function usarDinheiroMoeda(){

    }
}
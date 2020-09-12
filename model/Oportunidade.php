<?php

class Oportunidade implements JsonSerializable{
    private $id;
    private $nome;
    private $descricao;
    private $prazo;
    private $urlfoto;
    private $link;
    private $idcategoria;
    private $local;
    private $escolaridade;
    private $quem;
    private $como;
    private $premio;

    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPrazo() {
        return $this->prazo;
    }

    function getUrlfoto() {
        return $this->urlfoto;
    }

    function getLink() {
        return $this->link;
    }

    function getIdcategoria() {
        return $this->idcategoria;
    }

    function getLocal() {
        return $this->local;
    }

    function getEscolaridade() {
        return $this->escolaridade;
    }

    function getQuem() {
        return $this->quem;
    }

    function getComo() {
        return $this->como;
    }

    function getPremio() {
        return $this->premio;
    }
 
    function __construct($id = 0, $nome, $descricao, $prazo, $urlfoto, $link, $idcategoria, $local, $escolaridade, $quem, $como, $premio) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->prazo = $prazo;
        $this->urlfoto = $urlfoto;
        $this->link = $link;
        $this->idcategoria = $idcategoria;
        $this->local = $local;
        $this->escolaridade = $escolaridade;
        $this->quem = $quem;
        $this->como = $como;
        $this->premio = $premio;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'prazo' => $this->prazo,
            'urlfoto' => $this->urlfoto,
            'link' => $this->link,
            'idcategoria' => $this->idcategoria,
            'local' => $this->local,
            'escolaridade' => $this->escolaridade,
            'quem' => $this->quem,
            'como' => $this->como,
            'premio' => $this->premio
            
        ];
    }

}
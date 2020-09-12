<?php

class Categoria implements JsonSerializable{
    private $id;
    private $nome;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function __construct($nome, $id = 0) {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->nome
        ];
    }

}
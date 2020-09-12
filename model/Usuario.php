<?php

class Usuario implements JsonSerializable{
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function __construct($nome, $sobrenome, $email, $senha, $id = 0) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'email' => $this->email,
            'senha' => $this->senha
        ];
    }
}
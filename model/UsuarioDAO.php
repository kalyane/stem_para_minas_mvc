<?php

require_once 'Conexao.php';
require_once 'Usuario.php';

class UsuarioDAO{
    public static function insert(Usuario $usuario){
        $con = Conexao::connect();
        $stmt = $con->prepare("insert into usuario (nome, sobrenome, email, senha) values (?,?,?,?)");
        $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha);
        $nome = $usuario->getNome();
        $sobrenome = $usuario->getSobrenome();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        
        $result = $stmt->execute();
        
        return $result;
    }

    public static function autenticar($email, $senha){
        $con = Conexao::connect();
        $stmt = $con->prepare("select nome, sobrenome, id from usuario where email = ? and senha = ?");
        $stmt->bind_param("ss", $email_usuario, $senha_usuario);
        $email_usuario = $email;
        $senha_usuario = sha1($senha);

        if($stmt->execute()){
            $stmt->store_result();
            if($stmt->num_rows>0){
                $stmt->bind_result($nome, $sobrenome, $id);
                $stmt->fetch();
                $usuario = new usuario($nome, $sobrenome, $email, $senha, $id);
                return $usuario;
            }
        }
        return null;
    }
    
}
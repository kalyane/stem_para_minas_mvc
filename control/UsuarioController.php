<?php

require_once 'model/UsuarioDAO.php';

class UsuarioController{

    public static function cadastrar(){
        //Dados usuario
        $nome = $_REQUEST["nome"];
        $sobrenome = $_REQUEST["sobrenome"];
        $email = $_REQUEST["email"];
        $senha = sha1($_REQUEST["senha"]);
        $id = "";

        $usuario = new usuario($nome, $sobrenome, $email, $senha, $id);

        if(UsuarioDAO::insert($usuario)){
            echo "usuario inserido com sucesso";
        }else{
            echo "Nao foi possivel incluir esse usuario";
        }
    }

    public static function logar(){
        session_start();
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $usuario = UsuarioDAO::autenticar($email, $senha);
        if ($usuario != null){
            $_SESSION["usuario"] = $usuario;
            require_once 'requests.php?classe=usuario&acao=perfil';
        }else{
            echo "nao foi possivel logar";
        }
    }

    public static function perfil(){
        require_once 'view/usuario/perfil.php';
    }

}
?>
<?php

require_once 'Conexao.php';
require_once 'Categoria.php';

class CategoriaDAO{
    public static function insert(Categoria $categoria){
        $con = Conexao::connect();
        $stmt = $con->prepare("insert into categoria (nome) values (?)");
        $stmt->bind_param("s", $nome);
        $nome = $cardapio->getNome();
        
        $result = $stmt->execute();
        
        return $result;
    }
    
    public static function update(Categoria $categoria){
        $con = Conexao::connect();
        $stmt = $con->prepare("update categoria set nome = ? where idcardapio = ?");
        $stmt->bind_param("si", $nome, $id);
        $id = $categoria->getId();
        $nome = $categoria->getNome();
        
        $result = $stmt->execute();
        
        return $result;
    }
    
    public static function delete($id){
        $con = Conexao::connect();
        $stmt = $con->prepare("delete from cardapio where idcardapio = ?");
        $stmt->bind_param("i",$idcardapio);
        $idcardapio = $id;
        
        $result = $stmt->execute();
        
        return $result;
    }
    
    public static function getById($id){
        $con = Conexao::connect();
        $stmt = $con->prepare("select periodoinicial, periodofinal, cnpj, nome from cardapio where idcardapio = ?");
        $stmt->bind_param("i",$idcardapio);
        $idcardapio = $id;
        
        if($stmt->execute()){
            $stmt->bind_result($periodoinicial, $periodofinal, $cnpj, $nome);
            $stmt->fetch();
            
            $c = new Cardapio($periodoinicial, $periodofinal, $cnpj, $nome, $idcardapio);
            
        
            return $c;
        }
        return null;
    }
    
    public static function getAll(){
        $con = Conexao::connect();
        $stmt = $con->prepare("select id, nome from categoria");
        
        if($stmt->execute()){
            $stmt->bind_result($id, $nome);
            
            $categorias = array();
            while ($stmt->fetch()){
                $c = new Categoria($id, $nome);
                array_push($categorias,$c);
            }
            return $categorias;
            
        }
        return null;
    }
    
}
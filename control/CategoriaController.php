<?php

require_once 'model/CategoryDAO.php';

class CategoryController {
    public static function inserir(){
        $cnpj = $_REQUEST['cnpj'];
        $nome = strtoupper($_REQUEST['nome_categoria']);
        
        $categoria = new Categoria($nome, $cnpj);
        
        echo CategoriaDAO::insert($categoria);
    }
    public static function listar(){
        $cnpj = $_SESSION['restaurante']->getCnpj();
        return CategoriaDAO::getByCnpj($cnpj);
    }
    public static function categories(){
        echo json_encode(CategoryDAO::getAll());
    }
    public static function getCategoria(){
        $idcategoria = $_REQUEST['idcategoria'];
        $data = CategoriaDAO::getById($idcategoria);
        return $data;
    }
    public static function excluir(){
        $idcategoria = $_REQUEST['idcategoria'];
        if (CategoriaDAO::delete($idcategoria)){
            echo "A categoria foi exluida com sucesso";
        }else{
            echo "Não foi possível excluir a categoria";
        }
    }
}

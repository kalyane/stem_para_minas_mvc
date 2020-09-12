<?php

require_once 'model/OportunidadeDAO.php';

class OportunidadeController {
    public static function inserir(){
        $cnpj = $_REQUEST['cnpj'];
        $nome = strtoupper($_REQUEST['nome_categoria']);
        
        $categoria = new Categoria($nome, $cnpj);
        
        echo CategoriaDAO::insert($categoria);
    }
    public static function listar(){
        $oportunidades = OportunidadeDAO::getAll();
        require_once 'view/oportunidade/listar.php';
    }
    public static function listar2(){
        require_once 'view/oportunidade/opportunity.php';
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

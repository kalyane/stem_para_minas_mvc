<?php
if (isset($_GET["classe"]) && isset($_GET["acao"])){
    require_once 'requests.php';
}else{
    require_once 'view/website/home.php';
}

?>
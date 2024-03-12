<?php
include_once("controllers/HomeController.php");
include_once("controllers/ProductController.php");

$page = isset($_GET["page"])?$_GET["page"]:"/";

switch ($page){
    case "/": {
        $controller = new HomeController();
        $controller->index();
        break;
    }
    case "product":{
        $controller = new ProductController();
        $controller->action();
        break;
    }
    default: die("404 not found!");
}

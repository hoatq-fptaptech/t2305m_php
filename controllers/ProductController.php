<?php
include_once("database.php");
class ProductController{
    public function action(){
        $action = isset($_GET["action"])?$_GET["action"]:"/";
        switch ($action){
            case "/": $this->all();break;
            case "create": $this->create();break;
            case "save": $this->save();break;
            default: die("404 not found");
        }
    }

    public function all(){ // list all product
        $result = queryDB("select * from products");
        $data = [];
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        include_once("views/products.php");
    }

    public function create(){ // form view
        echo "form create product";
    }

    public function save(){ // save to db
        echo "save product";
    }
}
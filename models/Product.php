<?php
include_once "models/Model.php";
include_once "database.php";
class Product extends Model{
    protected static $table = "products";
    public $id;
    public $name;
    public $price;
    public $qty;

    public function __construct($data)
    {
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->price = $data["price"];
        $this->qty = $data["qty"];
    }

    public static function save(Model $model)
    {
        $sql = "INSERT INTO ".self::$table." (name,price,qty) VALUES('$model->name',$model->price,$model->qty);";
        queryDB($sql);
    }

    public static function all()
    {
        $sql = "SELECT * FROM ".self::$table;
        $rs = queryDB($sql);
        $data= [];
        while ($row = $rs->fetch_assoc()){
            $data[] = new Product($row);
        }
        return $data;
    }

    public static function update(Model $model)
    {
        $sql = "UPDATE ".self::$table." SET name= '$model->name', price = $model->price, qty = $model->qty WHERE ".self::$primaryKey." = $model->id";
        queryDB($sql);
    }

    public static function delete($id)
    {
        $sql = "DELETE FROM ".self::$table." WHERE ".self::$primaryKey." = $id";
        queryDB($sql);
    }

    public static function find($id)
    {
        $sql = "SELECT * FROM ".self::$table." WHERE ".self::$primaryKey." = $id";
        $rs= queryDB($sql);
        if($rs->num_rows > 0){
            return new Product($rs->fetch_assoc());
        }
        return null;
    }

}
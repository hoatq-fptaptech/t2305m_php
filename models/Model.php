<?php
abstract class Model{
    protected static $table;
    protected static $primaryKey = "id";

    public static abstract function save(Model $model);
    public static abstract function all();
    public static abstract function update(Model $model);
    public static abstract function delete($id);
    public static abstract function find($id);
}
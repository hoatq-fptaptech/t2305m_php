<?php
// GET METHOD
//$n = $_GET["name"];
//$p = $_GET["price"];
//$q = $_GET["qty"];

// POST METHOD
$n = $_POST["name"];
$p = $_POST["price"];
$q = $_POST["qty"];
$c = $_POST["category_id"];

// giả sử trước khi xử lý cần kiểm tra giá trị đuungs ko
// DEBUG
// var_dump($n);
// die();

// xử lý lưu dữ liệu vào db
$host = "localhost";
$user = "root";
$pwd = "root";
$db = "t2305m_php";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn->error){
    die("Connection refuse!");
}
$id = $_GET["id"];
// query
$sql = "update products set name='$n', price=$p, qty=$q, category_id=$c where id=$id";
$result = $conn->query($sql);

header("Location: /list.php");
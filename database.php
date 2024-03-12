<?php
function connectDB(){
    $host = "localhost";
    $user = "root";
    $pwd = "root";
    $db = "t2305m_php";

    $conn = new mysqli($host,$user,$pwd,$db);
    if($conn->error){
        die("Connection refuse!");
    }
    return $conn;
}

function queryDB($sql)
{
    $conn = connectDB();
    return $conn->query($sql);
}
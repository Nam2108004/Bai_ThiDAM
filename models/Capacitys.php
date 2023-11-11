<?php
require_once 'db.php';

function getAllCategory(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM capacitys");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function insertCategory($number){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO capacitys (number) VALUES ('$number')");
    $stmt->execute();
    return $stmt->fetch();
}
function getCategoryById($number){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM capacitys WHERE number = '$number'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function updateCategory($id_dung_luong, $number){
    global $conn;
    $stmt = $conn->prepare("UPDATE capacitys SET number ='$number' WHERE id_dung_luong = '$id_dung_luong'");
    $stmt->execute();
    return $stmt->fetch();
}


function removeCategory($id_dung_luong){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM categorys WHERE id_dung_luong = '$id_dung_luong'");
    $stmt->execute();
    return $stmt->fetch();
}
?>
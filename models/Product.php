<?php
require_once 'db.php';

// lấy dữ liệu sản phẩm từ database
function getAllProduct(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM hang_hoa");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// Thêm sản phảm vào database
function insertProduct($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $ma_loai, $dac_biet, $so_luot_xem, $mo_ta){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO hang_hoa (ten_hh, don_gia, giam_gia, hinh, ngay_nhap, ma_loai, dac_biet, so_luot_xem, mo_ta) VALUES ('$ten_hh', '$don_gia', '$giam_gia', '$hinh',' $ngay_nhap', '$ma_loai', '$dac_biet', '$so_luot_xem', '$mo_ta')");
    $stmt->execute();
    return $stmt->fetch();
}

function getProductById($ma_hh){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM hang_hoa WHERE ma_hh = '$ma_hh'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateProduct($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $ma_loai, $dac_biet, $so_luot_xem, $mo_ta){
    global $conn;
    $stmt = $conn->prepare("UPDATE hang_hoa (ten_hh, don_gia, giam_gia, hinh, ngay_nhap, ma_loai, dac_biet, so_luot_xem, mo_ta) VALUES ('$ten_hh', '$don_gia', '$giam_gia', '$hinh',' $ngay_nhap', '$ma_loai', '$dac_biet', '$so_luot_xem', '$mo_ta')");
    $stmt->execute();
    return $stmt->fetch();
}

function removeProduct($ma_hh){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM hang_hoa WHERE ma_hhh = '$ma_hh'");
    $stmt->execute();
    return $stmt->fetch();
}
?>  
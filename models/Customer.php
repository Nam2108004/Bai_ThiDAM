<?php
require_once 'db.php';

function insertCustomer($ho_ten, $mat_khau, $email, $hinh, $kich_hoat, $vai_tro)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO khach_hang (ho_ten, mat_khau, email, hinh, kich_hoat, vai_tro) VALUES ('$ho_ten', '" . md5($mat_khau) . "', '$email', '$hinh', '$kich_hoat', '$vai_tro')");
    $stmt->execute();
    return $stmt->fetch();
}
function insertComment($noi_dung, $ma_kh, $ma_hh, $ngay_bl)
{
    global $conn;
    $sql = "INSERT INTO binh_luan (noi_dung, ma_kh, ma_hh, ngay_bl) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$noi_dung, $ma_kh, $ma_hh, $ngay_bl]);
}

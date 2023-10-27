<?php

function insertComment($noi_dung, $ma_kh, $ma_hh, $ngay_bl)
{
    global $conn;
    $sql = "INSERT INTO binh_luan (noi_dung, ma_kh, ma_hh, ngay_bl) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$noi_dung, $ma_kh, $ma_hh, $ngay_bl]);
}
function removeComment($ma_bl)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM binh_luan WHERE ma_bl = '$ma_bl'");
    $stmt->execute();
    return $stmt->fetch();
}

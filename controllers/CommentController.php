<?php
require_once 'models/Comment.php';

function comment()
{

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ma_hh = $_POST["ma_hh"]; // Mã sản phẩm
        $noi_dung = $_POST["noi_dung"];
        $ma_kh = $_POST['ma_kh'];
        $ngay_bl = date('Y-m-d');
        insertComment($noi_dung, $ma_kh, $ma_hh, $ngay_bl);
        header("location: ?url=chitietsanpham&ma_hh= $ma_hh");
    }
}
function deleteComment()
{
    //Kiểm tra có lấy đc id trên url không
    if (isset($_GET['id'])) {
        // gán id trên url vào biến $id_category
        $id_comment = $_GET['id'];
        //gọi hàm xóa
        removeComment($id_comment);
        header("location: ?url=comment");
    }
}

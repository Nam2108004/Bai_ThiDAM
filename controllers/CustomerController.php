<?php 
require_once 'models/Customer.php';
// require_once 'models/db.php';
// Lấy dữ liệu người dùng từ form
function addCustomer(){
    include_once "views/login.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $mat_khau = $_POST['mat_khau'];
        $confirm_mat_khau = $_POST['confirm_mat_khau'];
        $hinh = $_POST['hinh'];
        $kich_hoat = 'active';
        $vai_tro = 'user';
        
        if(isset($ho_ten)&&isset($email)&&isset($mat_khau)&&isset($hinh)&&isset($kich_hoat)&&isset($vai_tro) && $mat_khau == $confirm_mat_khau){
            insertCustomer($ho_ten, $mat_khau, $email, $hinh, $kich_hoat, $vai_tro);
            header("location: ?url=login");
        }
        else{
            echo '<script>alert("Thông báo: Mật khẩu không khớp.");</script>';
        }
    }
}
?>
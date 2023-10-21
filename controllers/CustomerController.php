<?php
require_once 'models/Customer.php';
// require_once 'models/db.php';
// Lấy dữ liệu người dùng từ form
function addCustomer()
{
    include_once "views/login.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dangky'])) {
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $mat_khau = $_POST['mat_khau'];
        $confirm_mat_khau = $_POST['confirm_mat_khau'];
        $hinh = $_POST['hinh'];
        $kich_hoat = 'active';
        $vai_tro = 'user';

        if (isset($ho_ten) && isset($email) && isset($mat_khau) && isset($hinh) && isset($kich_hoat) && isset($vai_tro) && $mat_khau == $confirm_mat_khau) {
            insertCustomer($ho_ten, $mat_khau, $email, $hinh, $kich_hoat, $vai_tro);
            header("location: ?url=login");
        } else {
            echo '<script>alert("Thông báo: Mật khẩu không khớp.");</script>';
        }
    }
}

function login()
{
    include 'models/db.php';
    include_once "views/login.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['login'])) {
            $ho_ten = $_POST['ho_ten'];
            $mat_khau = $_POST['mat_khau'];
            // $sql = "select * from khach_hang where ho_ten='$ho_ten' and mat_khau='" . md5($mat_khau) . "'";
            // $kq = $conn->query($sql);
            $stmt = $conn->prepare("SELECT * FROM khach_hang WHERE ho_ten = ? AND mat_khau = ?");
            $stmt->execute([$ho_ten, md5($mat_khau)]);
            $row = $stmt->fetch();
            if ($row) {
                $_SESSION["ma_kh"] = $row["ma_kh"];
                $_SESSION["ho_ten"] = $row["ho_ten"];
                $_SESSION["email"] = $row["emai"];
                $_SESSION["hinh"] = $row["hinh"];
                $_SESSION["kich_hoat"] = $row["kich_hoat"];
                $_SESSION["vai_tro"] = $row["vai_tro"];
                if ($row['vai_tro'] == 'admin') {
                    // admin
                    header("location: ?url=admin");
                } else {
                    // user
                    header("location: ?url=/");
                }
            } else {
                echo '<span style="color:#AFA;text-align:center;"><br>Tài khoản hoặc mật khẩu không hợp lệ</span>';
            }
        }
    }
}

function logout()
{
    session_start();

    // Hủy tất cả các session
    session_destroy();

    // Chuyển hướng người dùng
    header("Location: ?url=/");
    exit();
}

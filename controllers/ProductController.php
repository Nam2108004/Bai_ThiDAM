<?php 
require_once 'models/Product.php';
// require_once 'models/db.php';

function listProduct(){
    $products = getAllProduct();
   
    include 'views/list_product.php';
}

function addProduct(){
    include_once "views/add_product.php";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $ten_hh = $_POST['ten_hh'];
        $don_gia = $_POST['don_gia'];
        $giam_gia = $_POST['giam_gia'];
        $hinh = $_POST['hinh'];
        $ngay_nhap = date('Y-m-d');
        $ma_loai = $_POST['ma_loai'];
        $dac_biet = $_POST['dac_biet'];
        $so_luot_xem = 0;
        $mo_ta = $_POST['mo_ta'];
        if(!empty($ten_hh)&&!empty($don_gia)){
            insertProduct($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $ma_loai, $dac_biet, $so_luot_xem, $mo_ta);
            header("location: index.php");   
        }
        else{
            echo 'Không thêm được do thiếu dữ liệu';
        }
    }
}

function editProduct(){

    if(isset($_GET['id'])){

        $id_product = $_GET['id'];

        $product_data = getProductById($id_product);

        if(isset($product_data)){
            include 'views/edit_product.php';
            
            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                $ma_hh = $_POST['ma_hh'];
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $giam_gia = $_POST['giam_gia'];
                $hinh = $_POST['hinh'];
                $ngay_nhap = $_POST['ngay_nhap'];
                $loai = $_POST['ma_loai'];
                $dac_biet = $_POST['dac_biet'];
                $so_luot_xem = $_POST['so_luot_xem'];
                $mo_ta = $_POST['mo_ta'];
            }

            if(isset($ma_hh)&&isset($ten_hh)&&isset($don_gia)&&isset($giam_gia)&&isset($hinh)&&isset($loai)&&isset($dac_biet)&&isset($mo_ta)){
                updateProduct($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $loai, $dac_biet, $so_luot_xem, $mo_ta);
            // var_dump($ten_hh); die;
            header("location:/");
            }
            else{
                echo"Lỗi";
            }
            

        }
    }
}
function deleteProduct(){
    //Kiểm tra có lấy đc id trên url không
    if(isset($_GET['id'])){ 
        // gán id trên url vào biến $id_category
        $id_product = $_GET['id'];
        //gọi hàm xóa
        removeProduct($id_product);
        header("location:index.php");
    }
}
?>
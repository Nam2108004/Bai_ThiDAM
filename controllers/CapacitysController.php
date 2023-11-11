<?php
require_once 'models/Capacitys.php';
// require_once 'models/db.php';

function listCapacity()
{
    $capacitys = getAllCapacity();
    include 'views/admin/list_capacitys.php';
}

function addCapacitys()
{
    include_once "views/admin/add_capacity.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];

        if (!empty($number)) {
            insertCapacity($number);
            header("location: ?url=list-capacitys");
        }
    }
}

// Hàm sửa danh mục
function editCapacitys()
{
    //Kiểm tra có lấy đc id trên url không
    if (isset($_GET['id'])) {
        // gán id trên url vào biến $id_category
        $id_capacity = $_GET['id'];
        //Tạo biến $category_data để hứng dữ liệu từ hàm getCategoryById đã được truyền $id_category vào
        $capacity_data = getCapacityById($id_capacity);
        //kiểm tra xem $capacity_data có dữ liệu không
        if (isset($capacity_data)) {
            //gọi form để nhập dữ liệu
            include 'views/admin/edit_capacity.php';
            //Kiểm tra sever có trả về dữ liệu không
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //Tạo biến để gán dữ liệu bên form
                $ma_loai = $_POST['id_dung_luong'];
                $number = $_POST['ten_loai'];
            }
            //kiểm tra biến có dữ liệu không và gọi đến hàm updateCategory bên models đã được truyền dữ liệu tạo biến bên trên
            if (isset($id_dung_luong) && isset($number)) {
                updateCategory($id_dung_luong, $number);
                header("location: ?url=list-category");
            }
        }
    }
}

function deleteCapacity()
{
    //Kiểm tra có lấy đc id trên url không
    if (isset($_GET['id'])) {
        // gán id trên url vào biến $id_category
        $id_capacity = $_GET['id'];
        //gọi hàm xóa
        removeCategory($id_capacity);
        header("location: ?url=list-capacity");
    }
}

function hiddenCapacity()
{
    global $conn;

    if (isset($_POST['btn'])) {
        $ma_loai = $_POST[''];

        try {
            $query_select_deleted = "SELECT deleted FROM capacitys WHERE id_dung_luong = :id_dung_luong";
            $stmt = $conn->prepare($query_select_deleted);
            $stmt->bindParam(':id_dung_luong', $id_dung_luong);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $currentDeleted = $row['deleted'];


            $newDeleted = ($currentDeleted == 1) ? 0 : 1;

            $query_update_deleted = "UPDATE loai SET deleted = :new_deleted WHERE id_dung_luong = :id_dung_luong";
            $stmt = $conn->prepare($query_update_deleted);
            $stmt->bindParam(':new_deleted', $newDeleted);
            $stmt->bindParam(':id_dung_luong', $id_dung_luong);

            if ($stmt->execute()) {
                // Cập nhật thành công
                header("Location: ?url=list-capacity");
                // echo 'done';
            } else {
                echo "Lỗi khi cập nhật.";
            }
        } catch (PDOException $e) {
            echo "Lỗi truy vấn hoặc kết nối CSDL: " . $e->getMessage();
        }
    }
}

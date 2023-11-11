<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="public/css/css.css">
    <link rel="stylesheet" href="public/css/home.css">

</head>

<body>
    <?php include 'views/layouts/header_admin.php' ?>
    <main class="mb">
        <h2 style="text-align:center">Sửa Dung Lượng</h2>

        <form style="width: 400px; margin: auto; text-align:start;" method="POST">
            <div class="mb-3">
                <!-- $capacity_data lấy bên controllers gán vào $category để dùng -->
                <?php foreach ($capacity_data as $capacity) : ?>
                    <label for="exampleInputEmail1" class="form-label">Tên Loại</label>
                    <input name="id_dung_luong" type="hidden" value="<?php echo $capacity['id_dung_luong'] ?>">
                    <input name="number" type="text" value="<?php echo $capacity['number'] ?>" required>
                <?php endforeach ?>
            </div>

            <button name="sualoai" type="submit" class="btn btn-primary">Sửa</button>
        </form>


    </main>

    <?php include 'views/layouts/footer_xphone.php' ?>
</body>

</html>
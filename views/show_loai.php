<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/showdanhmuc.css">
</head>

<body>
    <div id="wapper">
        <div id="topbar">
            <a href="#">
                <h2> HỆ THỐNG CỬA HÀNG XPHONE</h2>
            </a>
            <ul>
                <li>
                    <p style="color:red; font-size: 17px;font-weight: bold; margin: 0;">
                        Hello <?php

                                if (isset($_SESSION['ma_kh'])) {
                                    echo $_SESSION['ho_ten'];
                                ?>
                            <a class="active" style="font-weight: normal;" href="?url=logout"> | Logout |</a>
                        <?php } else {
                                    echo "you!";
                        ?>
                            <a class="active" style="font-weight: normal;" href="?url=login"> =>Login<= </a>
                                <?php }
                                ?>
                    </p>
                </li>
                <li><a href="product.php">KIỂM TRA ĐƠN HÀNG</a></li>
                <li><a href="product.php">TIN TỨC</a></li>
                <li><a href="product.php">LIÊN HỆ</a></li>
            </ul>
        </div>
        <header id="header">
            <div id="logo">
                <a href="index.php"> <img src="http://storexphone.com/Upload/ImageDes/images/logo.png" alt="Logo"></a>
            </div>
            <div class="menu">
                <ul>
                    <?php include 'models/db.php';
                    $sql = "select * from loai";
                    $kq = $conn->query($sql);
                    foreach ($kq as $key => $rows) {
                    ?>

                        <li>
                            <h2>
                                <a style="text-transform: uppercase;" href="?url=showloai&ma_loai=<?php echo $rows['ma_loai'] ?>">
                                    <?php echo $rows['ten_loai'] ?>
                                </a>
                            </h2>
                        </li>
                    <?php
                    }
                    ?>
                    <div id="nav">
                        <a href="product.php"> <img src="public/img/search.png" alt=""></a>
                        <a href="product.php"><img src="public/img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <div id="title_product">
            <h1>PRODUCT</h1>
            <span><a href="index.php">Trang chủ </a>> Product</span>
        </div>


        <?php include 'models/db.php';
        if (isset($_GET['ma_loai'])) {
            $ma_loai = $_GET['ma_loai'];
            $sqldanhmuc = "select * from hang_hoa where ma_loai='$ma_loai'";
            $kqdanhmuc = $conn->query($sqldanhmuc)->fetch();
        }
        ?>

        <!--  -->
        <h1 id="h1_content">
            <?php include 'models/db.php';
            $sql = "select * from loai where ma_loai='$ma_loai'";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <h1 style="text-align: center; font-size: 40px"><?php echo $rows['ten_loai']; ?></h1>

            <?php
            }
            ?>

        </h1>
        <!--  -->

        <section id="content">
            <?php 'models/db.php';
            $sql = "select * from hang_hoa where ma_loai='$ma_loai'";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <article id="item_content">
                    <a href="?url=chitietsanpham&ma_hh=<?php echo $rows['ma_hh'] ?>">
                        <img src="<?php echo $rows['hinh'] ?>" alt="">
                        <h5><?php echo $rows['ten_hh'] ?></h5>
                        <div class="price">
                            <div class="old-price">
                                <p><?php echo number_format($rows['don_gia'] * ($rows['giam_gia']))  ?>đ</p>
                            </div>
                            <div class="new-price">
                                <p><?php echo number_format($rows['don_gia'])  ?>đ</p>
                            </div>
                        </div>
                    </a>
                </article>
            <?php
            }
            ?>
        </section>



        <?php include 'views/layouts/footer_xphone.php' ?>
    </div>
</body>

</html>
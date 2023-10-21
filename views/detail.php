<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="public/css/detail.css">
</head>
<style>
    #login {
        display: none;
    }

    .login,
    .logout {
        position: absolute;
        top: -3px;
        right: 0;
    }

    .page-header {
        position: relative;
    }

    .reviews {
        color: #555;
        font-weight: bold;
        margin: 10px auto 20px;
    }

    .notes {
        color: #999;
        font-size: 12px;
    }

    .media .media-object {
        max-width: 120px;
    }

    .media-body {
        position: relative;
    }

    .media-date {
        position: absolute;
        right: 25px;
        top: 25px;
    }

    .media-date li {
        padding: 0;
    }

    .media-date li:first-child:before {
        content: '';
    }

    .media-date li:before {
        content: '.';
        margin-left: -2px;
        margin-right: 2px;
    }

    .media-comment {
        margin-bottom: 20px;
    }

    .media-replied {
        margin: 0 0 20px 50px;
    }

    .media-replied .media-heading {
        padding-left: 6px;
    }

    .btn-circle {
        font-weight: bold;
        font-size: 12px;
        padding: 6px 15px;
        border-radius: 20px;
    }

    .btn-circle span {
        padding-right: 6px;
    }

    .embed-responsive {
        margin-bottom: 20px;
    }

    .tab-content {
        padding: 50px 15px;
        border: 1px solid #ddd;
        border-top: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .custom-input-file {
        overflow: hidden;
        position: relative;
        width: 120px;
        height: 120px;
        background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');
        background-size: 120px;
        border-radius: 120px;
    }

    input[type="file"] {
        z-index: 999;
        line-height: 0;
        font-size: 0;
        position: absolute;
        opacity: 0;
        filter: alpha(opacity=0);
        -ms-filter: "alpha(opacity=0)";
        margin: 0;
        padding: 0;
        left: 0;
    }

    .uploadPhoto {
        position: absolute;
        top: 25%;
        left: 25%;
        display: none;
        width: 50%;
        height: 50%;
        color: #fff;
        text-align: center;
        line-height: 60px;
        text-transform: uppercase;
        background-color: rgba(0, 0, 0, .3);
        border-radius: 50px;
        cursor: pointer;
    }

    .custom-input-file:hover .uploadPhoto {
        display: block;
    }
</style>

<body>
    <div id="wapper">
        <div id="topbar">
            <a href="#">
                <h2> HỆ THỐNG CỬA HÀNG XSHOP</h2>
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
                <a href="#"> <img src="public/img/logo.png" alt="Logo"></a>
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
                                <a style="text-transform: uppercase;" href="showdanhmuc.php?madanhmuc=<?php echo $rows['ma_loai'] ?>">
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

        <main>

            <?php include 'models/db.php';
            if (isset($_GET['ma_hh'])) {
                $ma_hh = $_GET['ma_hh'];
                $sqlsp = "select * from hang_hoa where ma_hh='$ma_hh'";
                $kqsp = $conn->query($sqlsp)->fetch();
            }
            ?>

            <div id="left"><img src="<?php echo $kqsp['hinh'] ?>" alt="">

            </div>
            <div id="right">
                <h1><?php echo $kqsp['ten_hh'] ?></h1>
                <div style="width: 500px;" class="tinvt">
                    <p><?php echo mb_substr($kqsp['mo_ta'], 0, 150) . '...' ?></p>
                </div>
                <div class="price">
                    <span class="price-old"><?php echo number_format($kqsp['don_gia'] * ($kqsp['giam_gia']))  ?>₫</span>
                    <span class="price-new"><?php echo number_format($kqsp['don_gia'])  ?>₫</span>
                </div>
                <div class="buy">
                    <input type="submit" value="Mua Ngay">
                </div>
                <div class="chitiet">
                    <h2>Mô tả</h2>
                    <p><?php echo $kqsp['mo_ta'] ?></p>
                </div>

            </div>

        </main>
        <div id="text">
            <div class="text-left">
                <p class="to">Chất lượng sản phẩm?</p>
                <p class="nho">Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay khách hàng!</p>
                <p class="to">Sai màu sản phẩm?</p>
                <p class="nho">Vì 1 số yếu tố khách quan như độ sáng màn hình, chất lượng màn hình nên sản phẩm có thể ko đúng màu.</p>
                <p class="to">Hàng có sẵn không?</p>
                <p class="nho">Sản phẩm hiện có sẵn tại hệ thống cửa hàng XSHOP và online tại website.</p>
                <p class="to">Bảo hành sản phẩm</p>
                <p class="nho">Sản phẩm được bảo hành trong 30 ngày với bất kỳ lỗi nào. Hàng SALE không được bảo hành.</p>
            </div>

            <div class="text-right">
                <p class="to">Thời gian giao hàng?</p>
                <p class="nho">Chúng tôi sử dụng đơn vi vận chuyển uy tín và nhanh chóng nhất, thời dự kiến từ 1-4 ngày tuy khu vực.</p>
                <p class="to">Thời gian làm việc?</p>
                <p class="nho">Hệ thống cửa hàng và Online làm việc từ 8:30 - 22:00 hàng ngày.</p>
                <p class="to">Đổi hàng như thế nào?</p>
                <p class="nho">Việc đổi hàng rất dễ dàng và chúng tôi luôn muốn khách hàng ưng ý nhất. Hãy liên hệ fanpage để đổi!</p>
                <p class="to">Chọn sai size giày?</p>
                <p class="nho">Bạn có thể qua cửa hàng hoặc gửi lại để đổi hàng với sản phẩm mới 100%. Còn nguyên tem mác, hoá đơn mua hàng.</p>
            </div>
        </div>

        <!-- Sản phẩm cùng loại -->
        <h2 style="font-size: 28px; margin-left:50px; margin-bottom:40px">Sản phẩm cùng loại</h2>
        <div id="recommend">
            <?php include 'models/db.php';
            $sql = "select * from hang_hoa";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <article id="item_content">
                    <a href="?url=chitietsanpham&ma_hh=<?php echo $rows['ma_hh'] ?>">
                        <img src="<?php echo $rows['hinh'] ?>" alt="">
                        <h5><?php echo $rows['ten_hh'] ?></h5>
                        <div class="price">
                            <div class="old-price">
                                <p><?php echo $rows['don_gia'] ?>đ</p>
                            </div>
                            <div class="new-price">
                                <p><?php echo $rows['don_gia'] ?>đ</p>
                            </div>
                        </div>
                    </a>
                </article>
            <?php
            }
            ?>
        </div>

    </div>


    <footer id="footer">
        <div id="logo_footer">
            <a href="#"><img src="public/img/logo.png" alt=""></a>
            <p>Hệ thống giày thể thao số 1 Hà Nội</p>
            <p class="hotline"><span>Hotline</span> <a href="#">0123456789</a></p>
            <p><span>Store 1:</span> 57 Quan Hoa, Cầu Giấy, HN <br> <br> <span>Store 2:</span> 29 Trần Đại Nghĩa,
                Hai Bà Trưng, HN <br> <br><span>Store 3:</span> 61
                Trần Phú, Hà Đông, HN <br> <br> </p>
        </div>
        <div id="dichvu">
            <h2>DỊCH VỤ KHÁCH HÀNG</h2>
            <p><a href="#">Giới thiệu XSHOP</a> <br> </p>
            <p><a href="#">Hướng dẫn đặt hàng</a> <br> </p>
            <p><a href="#">Chính sách đổi trả và bảo hành</a> <br> </p>
            <p><a href="#">Chính sách bảo mật</a> <br> </p>
            <p><a href="#">Liên hệ XSHOP</a> <br> </p>
            <p><a href="#">Hệ thống cửa hàng</a></p>
        </div>

        <div id="facebook">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=256623368880552&autoLogAppEvents=1" nonce="aj8H3wq8"></script>
            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="250" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
            </div>
        </div>
    </footer>
</body>

</html>
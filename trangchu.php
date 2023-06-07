<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetic</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .all .section1 {
            margin-top: 30px;
            width: 80%;
            margin-left: 11%;
        }

        .all .section1 .layout-1 {
            margin-top: 10px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .all .section1 .layout-1 .sp-1 {
            width: 290px;
            height: 320px;
            border: 1px solid rgb(207, 207, 207);
            text-align: center;
            border-radius: 5px;
        }

        .all .section1 .layout-1 .sp-1:hover {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        }

        .all .section1 .layout-1 .sp-1 img {
            width: 200px;
            height: 200px;
        }

        .all .section1 .layout-1 .sp-1 a {
            font-size: 17px;
            text-decoration: none;
            color: black;
        }

        .all .section1 .layout-1 .sp-1 a:hover {
            color: blue;
        }

        .all .section1 .layout-1 .sp-1 button {
            width: 150px;
            height: 30px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid black;
            background-color: white;
        }

        .all .section1 .layout-1 .sp-1 button:hover {
            background-color: black;
            color: white;
        }

        .all .footer .for {
            margin-left: 10%;
        }

        .all .footer {
            height: 260px;
        }
    </style>
</head>

<body>
    <?php
    require('ketnoi.php');
    $sql = "select * from san_pham";
    $result = $conn->query($sql);
    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = ' đ')
        {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }

    ?>
    <div class="all">
        <div class="header">
            <img src="img/image 1.png" alt="">
            <ul>
                <li><a href="hot_deals.php">HOT DEALS</a></li>
                <li><a href="#">THƯƠNG HIỆU</a></li>
                <li><a href="#">BÁN CHẠY</a></li>
                <li><a href="#">SẢN PHẨM MỚI</a></li>
                <div class="search">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Tìm kiếm" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <li><a href="#">ĐĂNG NHẬP</a></li>
                <a href="#"><img class="cart" src="img/image 3.png" alt=""></a>
            </ul>
        </div>
        <div class="banner">
            <img src="img/banner.jpg" alt="">
        </div>
        <div class="section1">
            <h2>COSMETIC GỢI Ý CHO BẠN</h2>
            <div class="layout-1">

                <?PHP
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="sp-1">

                        <img src="<?PHP echo 'img/' . $row['hinh']; ?>" id="fix" alt=""><br>

                        <span id="price"> <?PHP echo currency_format($row['don_gia']); ?></span><br>

                        <a href="chitiet.php?id=<?php echo $row['ma_sp'] ?>">
                            <?PHP echo $row['ten_sp']; ?><br>
                        </a>

                        <button type="submit">Thêm vào giỏ hàng</button>
                    </div>
                <?php
                } ?>

            </div>
        </div>
        <div class="footer">
            <div class="for">
                <h3 style="margin-left: 5%;">COSMETIC STORE</h3>
                <div class="face">
                    <img src="img/image 17.png" alt="">
                    <p style="font-size: 14px;">https://www.facebook.com/profile.php?id=100033943386287</p>
                </div>
                <div class="face">
                    <img src="img/image 18.png" alt="">
                    <p style="font-size: 14px;">huye.n_rtagz0410</p>
                </div>
                <div class="face">
                    <img src="img/image 19.png" alt="">
                    <p style="font-size: 14px;">nguyentrang40901@gmail.com</p>
                </div>
                <div class="face">
                    <img src="img/image 20.png" alt="">
                    <p style="font-size: 14px;">0961340901</p>
                </div>
                <div class="face">
                    <img src="img/image 21.png" alt="">
                    <p style="font-size: 14px;">Công Viên Phần Mềm Quang Trung, Quận 12, Tp. Hồ Chí Minh</p>
                </div>
            </div>
            <div class="you">
                <div class="about">
                    <h3>VỀ CHÚNG TÔI</h3>
                    <p style="font-size: 14px;">
                        Chăm sóc làn da bằng những sản phẩm dịu nhẹ, lành tính chính là điều mà chúng tôi luôn hướng đến. <br>
                        Ngay từ khi bắt đầu, chúng tôi đã luôn hướng tới việc kinh doanh các sản phẩm lành tính cho da, <br>
                        ngay cả các loại da nhạy cảm nhất, vì mọi loại da đều có lúc trở nên nhạy cảm nhất. <br>
                        Tại Cosmetic, tất cả chúng tôi đều nói không với những sản phẩm gây kích ứng da. <br>
                        Vì đôi lúc mọi loại da đều có thể trở nên nhạy cảm: ô nhiễm, stress, các yếu tố kích ứng, <br>
                        thời tiết thay đổi, thiếu ngủ và cuộc sống tại thành phố, <br>
                        có hàng triệu lý do làm cho làn da của chúng ta trở nên nhạy cảm và cần được chă sóc với các sản phẩm lành tính. <br>
                        Với phương châm “Chất lượng thật - Giá trị thật”, chúng tôi luôn nỗ lực không ngừng <br>
                        nhằm nâng cao chất lượng sản phẩm & dịch vụ để khách hàng có được những trải nghiệm mua sắm tốt nhất. <br>
                        Toàn bộ sản phẩm có ở Cosmetic đều được cam kết 100% chính hãng, <br>
                        đảm bảo nguốn gốc xuất sứ với mức giá luôn tốt hàng đầu thị trường trong mọi thời điểm. <br>
                        Ngoài ra, chúng tôi cam kết bảo vệ hai lớp với mức đền bù 200% nếu phát hiện hàng giả, <br>
                        trong đó 100% từ Cosmetic và 100% từ nhà phân phối. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
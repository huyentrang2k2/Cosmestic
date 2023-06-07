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

        .all .section1 .layout-1 .sp-1 input {
            width: 150px;
            height: 30px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid black;
            background-color: white;
        }

        .all .section1 .layout-1 .sp-1 input:hover {
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
            <a href="index.php"><img src="img/image 1.png" alt=""></a>
            <ul>
                <li><a href="index.php?act=hot">HOT DEALS</a></li>
                <li><a href="index.php?act=hieu">THƯƠNG HIỆU</a></li>
                <li><a href="index.php?act=run">BÁN CHẠY</a></li>
                <li><a href="index.php?act=new">SẢN PHẨM MỚI</a></li>
                <div class="search">
                    <form action="#" method="post">
                        <input type="text" placeholder="Tìm kiếm" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <li><a href="index.php?act=login">ĐĂNG NHẬP</a></li>
                <a href="index.php?act=addtocart"><img class="cart" src="img/image 3.png" alt=""></a>
            </ul>
        </div>
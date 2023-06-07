<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/binhluan.php";
include "model/loai.php";

include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = load_sanpham_home();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // case 'sanpham':
            //     if (isset($_POST['search']) && ($_POST['search'] != "")) {
            //         $search = $_POST['search'];
            //     } else {
            //         $search = "";
            //     }
            //     $dssp = load_sanpham($search);
            //     include "view/sanpham.php";
            //     break;
        case 'chitiet':
            if (isset($_GET['masp']) && ($_GET['masp'] > 0)) {
                $ma_sp = $_GET['masp'];
                $onesp = loadone_sanpham($ma_sp);
                include "view/chitiet.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'hot':
            include "view/hot_deals.php";
            break;
        case 'hieu':
            include "view/thuonghieu.php";
            break;
        case 'run':
            include "view/banchay.php";
            break;
        case 'new':
            include "view/sanphammoi.php";
            break;
        case 'login':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $ho_ten = $_POST['hoten'];
                $mat_khau = $_POST['pass'];
                $login = login($ho_ten, $mat_khau);
                if (is_array($login)) {
                    $_SESSION['user'] = $login;
                    $thongbao = "Bạn đã đăng nhập thành công";
                    // header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản của bạn không tồn tại";
                }
            }
            include "view/dangnhap.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $ho_ten = $_POST['hoten'];
                $mat_khau = $_POST['pass'];
                insert_taikhoan($ho_ten, $mat_khau, $email);
                $thongbao = "Đã đăng ký thành công";
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $img = $_POST['hinh'];
                $don_gia = $_POST['don_gia'];
                $ten_sp = $_POST['ten_sp'];
                $soluong = 1;
                $ttien = $soluong * $don_gia;
                $spadd = [$img, $don_gia, $ten_sp, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;

        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=viewcart');
            break;

        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";

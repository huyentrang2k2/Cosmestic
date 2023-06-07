<?php

include "../model/pdo.php";

include "../model/loai.php";

include "../model/sanpham.php";

include "../model/taikhoan.php";

include "../model/binhluan.php";

include "../global.php";

include "header.php";

$spnew = load_sanpham_home();

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dm':

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ten_loai = $_POST['tenloai'];
                insert_loai($ten_loai);
                $thongbao = "Thêm thành công";
            }

            include "danhmuc/add.php";
            break;
        case 'list_dm':

            $listdm = load_loai();
            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_loai($_GET['id']);
            }

            $listdm = load_loai();
            include "danhmuc/list.php";
            break;

        case 'suadm':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $loai = loadone_loai($_GET['id']);
            }
            $listdm = load_loai();
            include "danhmuc/update.php";
            break;

        case 'update_loai':

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_loai = $_POST['tenloai'];
                $ma_loai = $_POST['id'];
                update_loai($ten_loai, $ma_loai);
                $thongbao = "Cập nhật thành công";
            }

            $listdm = load_loai();
            include "danhmuc/list.php";
            break;

            // sản phẩm

        case 'sp':

            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $ma_loai = $_POST['maloai'];
                $ten_sp = $_POST['tensp'];
                $don_gia = $_POST['giasp'];
                $mo_ta = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }


                insert_sanpham($ten_sp, $don_gia, $hinh, $mo_ta, $ma_loai);
                $thongbao = "Thêm thành công";
            }

            $listdm = load_loai();
            include "sanpham/add.php";
            break;
        case 'list_sp':

            $listsanpham = load_sanpham();
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }

            $listsanpham = load_sanpham();
            include "sanpham/list.php";
            break;

        case 'suasp':

            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdm = load_loai();
            $listsanpham = load_sanpham();
            include "sanpham/update.php";
            break;

        case 'update_sp':

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ma_sp = $_POST['masp'];
                $ma_loai = $_POST['maloai'];
                $ten_sp = $_POST['tensp'];
                $don_gia = $_POST['giasp'];
                $mo_ta = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($ten_sp, $ma_sp, $ma_loai, $don_gia, $mo_ta, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = load_loai();
            $listsanpham = load_sanpham();
            include "sanpham/list.php";
            break;
        case 'kh':
            $listtaikhoan = load_taikhoan();
            include "taikhoan/list.php";
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
            include "dangnhap.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $ho_ten = $_POST['hoten'];
                $mat_khau = $_POST['pass'];
                insert_taikhoan($ho_ten, $mat_khau, $email);
                $thongbao = "Đã đăng ký thành công";
            }
            include "dangky.php";
            break;

        case 'bl':
            $listbinhluan = load_binhluan(0);
            include "binhluan/list.php";
            break;

        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }

            $listbinhluan = load_binhluan();
            include "binhluan/list.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";

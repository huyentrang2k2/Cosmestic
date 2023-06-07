<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";


    //ma_kh = $_SESSION['ma_kh'];
    $ma_sp = $_REQUEST['ma_sp'];
    $listbinhluan = loadone_binhluan($ma_sp);
    ?>


    <div>
        <div style="font-size: 20px; margin-top: 20px;">Bình luận</div>
        <div>
            <table>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    echo '<tr><td>' . $noi_dung . '</td>';
                    echo '<td>' . $ma_kh . '</td>';
                    echo '<td>' . $ngay_bl . '</td></tr>';
                }
                ?>
            </table>
        </div>
        <div>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="ma_sp" value="<?= $ma_sp ?>">
                <input style="width: 200px;
    height: 30px;
    font-size: 18px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="text" name="noidung">
                <input style="width: 100px;
    height: 30px;
    font-size: 15px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="submit" value="Gửi bình luận" name="guibinhluan">
            </form>
        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noi_dung = $_POST['noidung'];
            $ma_sp = $_POST['ma_sp'];
            // $ma_kh = $_SESSION['ma_kh'];
            $ngay_bl = date('h:i:sa d/m/Y');
            insert_binhluan($ma_sp, $noi_dung, $ngay_bl);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>
<div style="height: 1600px;">
    <div style="text-align: center;">
        <div>
            <h3 style="font-size: 27px; text-align: center; margin-top: 20px;">Giỏ hàng</h3>
        </div>
        <div>
            <table style="margin: auto; padding: 20px; width: 80%;" id="customers">
                <tr style="font-size: 20px;">
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                $tong = 0;
                $i = 0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $img_path . $cart[0];
                    $ttien = $cart[1] * $cart[3];
                    $tong += $ttien;
                    $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input style="width: 100px;
                    height: 30px;
                    margin-top: 10px;
                    border-radius: 5px;
                    border: 1px solid black;
                    background-color: white;" type="button" value="Xoá"></a>';
                    echo '<tr>
                    <td><img src="' . $cart[0] . '" height="100px"></td> 
                    <td>' . $cart[2] . '</td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . '</td>
                    <td>' . $ttien . '</td>
                    <td>' . $xoasp . '</td>
                    </tr>';
                    $i += 1;
                }

                echo '
                <tr style="
                margin-top: 10px;
                font-size: 20px;">
                <td>Tổng đơn hàng</td>
                <td></td>
                <td></td>
                <td></td>
                <td>' . $tong . '</td>
                <td></td>
                </tr>
                ';

                ?>
            </table>
        </div>
    </div>
    <div style="margin-left: 550px;">
        <a href="index.php?act=bill"><input style="width: 180px;
    height: 40px;
    font-size: 18px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="button" value="Đồng ý đặt hàng"></a>
        <a href="index.php?act=delcart"><input style="width: 180px;
    height: 40px;
    font-size: 18px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="button" value="Xoá giỏ hàng"></a>
    </div>
</div>
<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: bisque;
    }
</style>
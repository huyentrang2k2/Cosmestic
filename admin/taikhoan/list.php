<div style="height: 600px;">
    <div>
        <h3 style="font-size: 27px; text-align: center; margin-top: 20px;">Danh sách khách hàng</h3>
    </div>
    <div style="text-align: center;">
        <div>
            <table id="customers" style="margin: auto; padding: 20px; width: 80%;">
                <tr style="font-size: 20px;">
                    <th></th>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>

                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $ma_kh;
                    $xoatk = "index.php?act=xoatk&id=" . $ma_kh;
                    echo '
                        <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $ma_kh . '</td>
                        <td>' . $ho_ten . '</td>
                        <td>' . $email . '</td>
                        <td><a href="' . $suatk . '"><input style="width: 100px;
                        height: 30px;
                        margin-top: 10px;
                        border-radius: 5px;
                        border: 1px solid black;
                        background-color: white;" type="button" value="Sửa"></a> <a href="' . $xoatk . '"><input style="width: 100px;
                        height: 30px;
                        margin-top: 10px;
                        border-radius: 5px;
                        border: 1px solid black;
                        background-color: white;" type="button" value="Xoá"></a></td>
                    </tr>
                        ';
                }
                ?>
            </table>
        </div>
        <div>
            <input style="width: 150px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="button" value="Chọn tất cả">
            <input style="width: 150px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="button" value="Bỏ chọn tất cả">
            <input style="width: 150px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="button" value="Xoá các mục đã chọn">
            <a href="#"><input style="width: 150px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="button" value="Nhập thêm"></a>
        </div>
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
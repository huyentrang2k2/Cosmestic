<div style="height: 570px;">
    <div>
        <h3 style="font-size: 27px; text-align: center; margin-top: 20px;">Danh sách bình luận</h3>
    </div>
    <div style="text-align: center;">
        <div>
            <table style="margin: auto; padding: 20px; width: 80%;">
                <tr style="font-size: 20px;">
                    <th></th>
                    <th>Mã bình luận</th>
                    <th>Nội dung bình luận</th>
                    <th>Mã khách hàng</th>
                    <th>Mã sản phẩm</th>
                    <th>Ngày bình luận</th>
                    <th>Thao tác</th>
                    <th></th>
                </tr>

                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=" . $ma_bl;
                    $xoabl = "index.php?act=xoabl&id=" . $ma_bl;
                    echo '
                        <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $ma_bl . '</td>
                        <td>' . $noi_dung . '</td>
                        <td>' . $ma_kh . '</td>
                        <td>' . $ma_sp . '</td>
                        <td>' . $ngay_bl . '</td>
                        <td><a href="' . $suabl . '"><input style="width: 100px;
                        height: 30px;
                        margin-top: 10px;
                        border-radius: 5px;
                        border: 1px solid black;
                        background-color: white;" type="button" value="Sửa"></a> <a href="' . $xoabl . '"><input style="width: 100px;
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
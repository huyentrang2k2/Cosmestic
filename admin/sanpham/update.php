<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100'>";
} else {
    $hinh = "không có hình";
}
?>

<div style="margin: 30px; margin-left: 600px; height: 600px;">
    <div>
        <h3 style="font-size: 27px; margin-top: 20px;">Cập nhật sản phẩm</h3>
    </div>
    <div>
        <form action="index.php?act=update_sp" method="post" enctype="multipart/form-data">
            <div>
                Loại sản phẩm: <br>
                <select style="width: 200px;
    height: 30px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" name="maloai" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdm as $loai) {
                        extract($loai);
                        if ($ma_loai == $ma_loai) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $ma_loai . '" ' . $s . '>' . $ten_loai . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div>
                Tên sản phẩm: <br>
                <input style="width: 200px;
    height: 30px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="text" name="tensp" value="<?= $ten_sp ?>">
            </div>
            <div>
                Giá sản phẩm: <br>
                <input style="width: 200px;
    height: 30px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="text" name="giasp" value="<?= $don_gia ?>">
            </div>
            <div>
                Hình sản phẩm: <br>
                <input style="width: 250px; height: 30px;
    margin-top: 5px;" type="file" name="hinh"><br>
                <?= $hinh ?>
            </div>
            <div>
                Mô tả sản phẩm: <br>
                <textarea style="width: 300px;
    height: 200px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" name="mota" cols="30" rows="10"><?= $mo_ta ?></textarea>
            </div>
            <div>
                <input style="width: 100px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="hidden" name="masp" value="<?= $ma_sp ?>">
                <input style="width: 100px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="submit" name="capnhat" value="Cập nhật">
                <input style="width: 100px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="reset" value="Nhập lại">
                <a href="index.php?act=list_sp"><input style="width: 100px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
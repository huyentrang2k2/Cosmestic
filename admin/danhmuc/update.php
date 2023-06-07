<?php
if (is_array($loai)) {
    extract($loai);
}
?>

<div style="height: 560px; margin: 30px; margin-left: 600px;">
    <div>
        <h3 style="font-size: 27px; margin-top: 20px;">Cập nhật loại sản phẩm</h3>
    </div>
    <div>
        <form action="index.php?act=update_loai" method="post">
            <div>
                Mã loại: <br>
                <input style="width: 200px;
    height: 30px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="text" name="maloai" disabled>
            </div>
            <div>
                Tên loại: <br>
                <input style="width: 200px;
    height: 30px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;
    text-align: center;" type="text" name="tenloai" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>">
            </div>
            <div>
                <input style="width: 100px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="hidden" name="id" value="<?php if (isset($ma_loai) && ($ma_loai > 0)) echo $ma_loai; ?>">
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
                <a href="index.php?act=list_dm"><input style="width: 100px;
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
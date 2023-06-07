<div style="margin: 30px; margin-left: 600px; height: 560px;">
    <div>
        <h3 style="font-size: 27px; margin-top: 20px;">Thêm sản phẩm</h3>
    </div>
    <div>
        <form action="index.php?act=sp" method="post" enctype="multipart/form-data">
            <div>
                Loại sản phẩm: <br>
                <select style="width: 200px;
    height: 30px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" name="maloai" id="">
                    <?php
                    foreach ($listdm as $loai) {
                        extract($loai);
                        echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
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
    background-color: white;" type="text" name="tensp">
            </div>
            <div>
                Giá sản phẩm: <br>
                <input style="width: 200px;
    height: 30px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="text" name="giasp">
            </div>
            <div>
                Hình sản phẩm: <br>
                <input style="width: 250px; height: 30px;
    margin-top: 5px;" type="file" name="hinh">
            </div>
            <div>
                Mô tả sản phẩm: <br>
                <textarea style="width: 300px;
    height: 200px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" name="mota" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input style="width: 100px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="submit" name="themmoi" value="Thêm">
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
<div style="margin: 30px; margin-left: 600px; height: 560px;">
    <div>
        <h3 style="font-size: 27px; margin-top: 20px;">Thêm loại sản phẩm</h3>
    </div>
    <div>
        <form action="index.php?act=dm" method="post">
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
    background-color: white;" type="text" name="tenloai">
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
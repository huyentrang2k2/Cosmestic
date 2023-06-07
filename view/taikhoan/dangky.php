<div style="height: 570px;">
    <div>
        <h3 style="font-size: 27px; text-align: center; margin-top: 20px;">Đăng ký</h3>
    </div>
    <div>
        <form style="margin-left: 550px; margin-top: 20px;" action="index.php?act=dangky" method="post" enctype="multipart/form-data">
            <label for="uname">
                <p>Email</p>
            </label><br>
            <input style="width: 400px;
    height: 30px;
    top: 15px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="email" name="email"><br>
            <label for="uname">
                <p style="margin-top: 10px;">Họ tên</p>
            </label><br>
            <input style="width: 400px;
    height: 30px;
    top: 15px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="text" name="hoten"><br>
            <label for="uname">
                <p style="margin-top: 10px;">Mật khẩu</p>
            </label><br>
            <input style="width: 400px;
    height: 30px;
    top: 15px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="password" name="pass"><br>
            <input style="width: 100px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="submit" name="dangky" value="Đăng ký"><br>
        </form>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </div>
</div>
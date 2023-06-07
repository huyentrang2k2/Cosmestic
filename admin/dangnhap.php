<div style="height: 570px;">
    <div>
        <h3 style="font-size: 27px; text-align: center; margin-top: 20px;">Đăng nhập</h3>
    </div>
    <form style="margin-left: 550px; margin-top: 20px;" action="index.php?act=login" method="post">
        <div>
            <label for="uname">
                <p>Họ tên</p>
            </label><br>
            <input style="width: 400px;
    height: 30px;
    top: 15px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="text" name="hoten" required><br>

            <label for="psw">
                <p style="margin-top: 10px;">Mật khẩu</p>
            </label><br>
            <input style="width: 400px;
    height: 30px;
    top: 15px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="password" name="pass" required><br>

            <input style="width: 100px;
    height: 30px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;" type="submit" name="dangnhap" value="Đăng nhập">
        </div>

        <div style="margin-top: 10px;">
            <a href="#" style="color: black;">Quên mật khẩu</a>
            <a href="index.php?act=dangky" style="color: black;">Đăng ký tài khoản</a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</div>
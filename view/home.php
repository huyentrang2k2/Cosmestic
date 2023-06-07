<div class="banner">
    <img src="img/banner.jpg" alt="">
</div>
<div class="section1">
    <h2>COSMETIC GỢI Ý CHO BẠN</h2>
    <div class="layout-1">

        <?php
        foreach ($spnew as $sanpham) {
            extract($sanpham);
            $img = $img_path . $hinh;
            $linksp = "index.php?act=chitiet&masp=" . $ma_sp;
            echo '<div class="sp-1">

            <img src="' . $img . '" alt=""><br>

            <span id="price">' . $don_gia . 'đ</span><br>

            <a href="' . $linksp . '">
            ' . $ten_sp . '
            </a><br>
            <form action="index.php?act=addtocart" method="post">
            <input type="hidden" name="ma_sp" value="' . $ma_sp . '">
            <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
            <input type="hidden" name="hinh" value="' . $img . '">
            <input type="hidden" name="don_gia" value="' . $don_gia . '">

            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
            </form>
        </div>';
        }
        ?>

    </div>
</div>
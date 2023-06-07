<div class="banner">
    <img src="../img/banner.jpg" alt="">
</div>

<div class="section1">
    <h2>COSMETIC GỢI Ý CHO BẠN</h2>
    <div class="layout-1">

        <?php
        foreach ($spnew as $sanpham) {
            extract($sanpham);
            $hinhpath = "../upload/" . $hinh;
            $linksp = "index.php?act=chitiet&masp=" . $ma_sp;

            echo '<div class="sp-1">

            <img src="' . $hinhpath . '" alt=""><br>

            <span id="price">' . $don_gia . 'đ</span><br>

            <a href="' . $linksp . '">
            ' . $ten_sp . '
            </a><br>
            <button type="submit">Thêm vào giỏ hàng</button>
        </div>';
        }
        ?>

    </div>
</div>
<div>
    <div>
        <?php
        foreach ($dssp as $sanpham) {
            extract($sanpham);
            $linksp = "index.php?act=chitiet&ma_sp" . $ma_sp;
            $img = $img_path . $hinh;
            echo '<div class="sp-1">

            <img src="' . $img . '" alt=""><br>

            <span id="price">' . $don_gia . '</span><br>

            <a href="' . $linksp . '">
            ' . $ten_sp . '
            </a><br>

            <button type="submit">Thêm vào giỏ hàng</button>
        </div>';
        }
        ?>
    </div>
</div>
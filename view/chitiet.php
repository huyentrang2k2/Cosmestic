<div style="margin-top: 20px; margin-left: 50px; width: 80%;">
    <div>
        <?php
        extract($onesp);
        ?>
        <div style="font-size: 20px;"><?= $ten_sp ?></div>
        <div style="display: flex; margin-top: 10px; gap: 15px;">
            <?php
            $img = $img_path . $hinh;
            echo '<img src="' . $img . '" alt="">';

            echo $mo_ta;

            ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#binhluan").load("view/binhluan/binhluan.php", {
                ma_sp: <?= $ma_sp ?>
            });
        });
    </script>
    <div id="binhluan">
        <h3>Bình luận</h3>

    </div>
</div>
<?php
function insert_binhluan($ma_sp, $noi_dung, $ngay_bl)
{
    $sql = "insert into binh_luan(ma_sp, noi_dung, ngay_bl) values('$ma_sp', '$noi_dung', '$ngay_bl')";
    pdo_execute($sql);
}
function loadone_binhluan($ma_sp)
{
    $sql = "select * from binh_luan where ma_sp='" . $ma_sp . "' order by ma_bl desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function load_binhluan()
{
    $sql = "select * from binh_luan order by ma_bl";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($ma_bl)
{
    $sql = "delete from binh_luan where ma_bl=" . $ma_bl;
    pdo_execute($sql);
}

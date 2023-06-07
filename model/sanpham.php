<?php

function insert_sanpham($ten_sp, $don_gia, $hinh, $mo_ta, $ma_loai)
{
    $sql = "insert into san_pham(ten_sp, don_gia, hinh, mo_ta, ma_loai) values('$ten_sp', '$don_gia', '$hinh', '$mo_ta', '$ma_loai')";
    pdo_execute($sql);
}

function delete_sanpham($ma_sp)
{
    $sql = "delete from san_pham where ma_sp=" . $ma_sp;
    pdo_execute($sql);
}

function load_sanpham_home()
{
    $sql = "select * from san_pham where 1 order by ma_sp desc limit 0,12";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_sanpham()
{
    // $sql = "select * from san_pham where 1";
    // if ($search != "") {
    //     $sql .= " and ma_sp like '%" . $search . "%'";
    // }
    // $sql .= " order by ma_sp";
    $sql = "select * from san_pham order by ma_sp";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($ma_sp)
{
    $sql = "select * from san_pham where ma_sp=" . $ma_sp;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function update_sanpham($ten_sp, $ma_sp, $ma_loai, $don_gia, $mo_ta, $hinh)
{
    if ($hinh != "")
        $sql = "update san_pham set ma_loai='" . $ma_loai . "', ten_sp='" . $ten_sp . "', hinh='" . $hinh . "', don_gia='" . $don_gia . "', mo_ta='" . $mo_ta . "' where ma_sp=" . $ma_sp;
    else
        $sql = "update san_pham set ma_loai='" . $ma_loai . "', ten_sp='" . $ten_sp . "', don_gia='" . $don_gia . "', mo_ta='" . $mo_ta . "' where ma_sp=" . $ma_sp;
    pdo_execute($sql);
}

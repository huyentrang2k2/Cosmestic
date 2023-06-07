<?php
function insert_taikhoan($ho_ten, $mat_khau, $email)
{
    $sql = "insert into khach_hang(ho_ten, mat_khau, email) values('$ho_ten', '$mat_khau', '$email')";
    pdo_execute($sql);
}

function login($ho_ten, $mat_khau)
{
    $sql = "select * from khach_hang where ho_ten='" . $ho_ten . "' and mat_khau='" . $mat_khau . "'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function load_taikhoan()
{
    $sql = "select * from khach_hang order by ma_kh";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

<?php

function insert_loai($ten_loai)
{
    $sql = "insert into loai(ten_loai) values('$ten_loai')";
    pdo_execute($sql);
}

function delete_loai($ma_loai)
{
    $sql = "delete from loai where ma_loai=" . $ma_loai;
    pdo_execute($sql);
}

function load_loai()
{
    $sql = "select * from loai order by ma_loai";
    $listdm = pdo_query($sql);
    return $listdm;
}

function loadone_loai($ma_loai)
{
    $sql = "select * from loai where ma_loai=" . $ma_loai;
    $loai = pdo_query_one($sql);
    return $loai;
}

function update_loai($ten_loai, $ma_loai)
{
    $sql = "update loai set ten_loai='" . $ten_loai . "' where ma_loai=" . $ma_loai;
    pdo_execute($sql);
}

<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc(name) VALUE('$tenloai')";
   
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id=" . $id;
    pdo_execute($sql);
}

function loadall_danhmuc($sql)
{
    $sql = "SELECT * FROM danhmuc ORDER BY ID DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "SELECT *FROM danhmuc WHERE id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE danhmuc SET name='" . $tenloai . "' WHERE id=" . $id;
    pdo_execute($sql);
}

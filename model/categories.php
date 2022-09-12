<?php

function insert_categories($tenloai){
    $sql = "insert into categories(name)
    values('$tenloai')";
    pdo_execute($sql);
}

function delete_categories($id){
    $sql = "delete from categories where id=" . $id;
    pdo_execute($sql);
}

function loadAll_categories(){
    $sql = "select * from categories order by  id desc";
    $listcategories = pdo_query($sql);
    return $listcategories;
}

function loadDone_categories($id){
    $sql = "select*from categories where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}


function update_categories($id,$tenloai){
    $sql = "update categories set name='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}
?>

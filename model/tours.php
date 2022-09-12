<?php

function insert_tours($tenkh,$hinh,$intro,$mota,$date,$gia,$idtours){
    $sql = "insert into tours(name,image,intro,description,number_date,price,category_id)
    values('$tenkh','$hinh','$intro','$mota','$date','$gia','$idtours')";
    pdo_execute($sql);
}

function delete_tours($id){
    $sql = "delete from tours where id=" . $id;
    pdo_execute($sql);
}

function loadAll_tours_home(){
    $sql = "select * from tours where 1 order by id desc limit 0,9";
    $listtours = pdo_query($sql);
    return $listtours;
}

function loadAll_tours($kyw="",$idtours=0){
    $sql = "select * from tours where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($idtousr>0){
        $sql.=" and idtour='".$idtours."'";
    }
    $sql .=" order by  id desc";
    $listtour = pdo_query($sql);
    return $listtours;
}

function loadDone_sanpham($id){
    $sql = "select*from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_ten_dm($iddm){
    if($iddm >0){
    $sql = "select*from danhmuc where id=" . $iddm;
    $dm = pdo_query_one($sql);
    extract($dm);
    }else{
        return "";
    }
    }
    

function loadDone_sanpham_cungloai($id,$iddm){
    $sql = "select*from sanpham where iddm=".$iddm." AND id<>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function  update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
    $sql = "update sanpham set iddm='" . $iddm . "',name='" . $tensp . "', price='" . $giasp . "', mota='" . $mota . "' , images='" . $hinh . "' where id=" . $id;
    else
    $sql = "update sanpham set iddm='" . $iddm . "', price='" . $giasp . "', mota='" . $mota . "' where id=" . $id;
    pdo_execute($sql);
}
?>

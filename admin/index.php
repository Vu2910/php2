<?php
include "../model/pdo.php";
include "../model/categories.php";
include "../model/tours.php";
include  "./header.php";

//controler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //controler danh mục
        case 'adddm':
            //Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) { //Nếu có tồn tại và người dùng click vô
                $tenloai = $_POST['tenloai'];
                insert_categories($tenloai);
                //thông báo xong
                $thongbao = "Thêm thành công";
            }
            include "categories/add.php";
            break;
        case 'listdm':

            $sql = "select * from categories order by  id desc";
            $listcategories = pdo_query($sql);
            include "categories/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_categories($_GET['id']);
            }
            $listcategories = loadAll_categories();
            include "categories/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                loadDone_categories($_GET['id']);
            }
            include "categories/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) { //Nếu có tồn tại và người dùng click vô
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_categories($id, $tenloai);
                //thông báo xong
                $thongbao = "Cập nhật thành công";
            }
            $listcategories = loadAll_categories();
            include "categories/list.php";
            break;
    }
} else {
    include "home.php";
}


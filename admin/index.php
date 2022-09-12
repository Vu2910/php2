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

            //controler sản phẩm

        case 'addtours':
            //Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) { //Nếu có tồn tại và người dùng click vô
                $iddm = $_POST['iddm'];
                $tenkh = $_POST['tenkh'];
                $intro = $_POST['intro'];
                $mota = $_POST['mota'];
                $date = $_POST['date'];
                $gia = $_POST['gia'];
                $idtours = $_POST['idtours'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_tours($tenkh, $hinh,$intro, $mota, $date, $gia, $iddm);
                //thông báo xong
                $thongbao = "Thêm thành công";
            }
            $listcategories = loadAll_categories();
            // var_dump($listdanhmuc);
            include "tours/add.php";
            break;
        case 'listtours':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listcategories = loadAll_categories();
            $listtours = loadAll_tours($kyw, $idtours);
            include "tours/list.php";
            break;
        case 'xoatours':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tours($_GET['id']);
            }
            include "tours/list.php";
            break;
        case 'suatours':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tours = loadDone_tours($_GET['id']);
            }
            $listcategories = loadAll_categories();
            include "tours/update.php";
            break;
        case 'updatetours':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) { 
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
        
                } else {
                   
                }
                update_tours($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listcategories = loadAll_categories();
            $listtours = loadAll_tours($kyw, $idtours);
            include "tours/list.php";
            break;
    }
} else {
    include "home.php";
}


include "./footer.php";

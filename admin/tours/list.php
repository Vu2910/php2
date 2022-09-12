<div class=" boxcenter">
    <div class="row mb header mb">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo  '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>

        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row">
        <div class="row formContent">
            <form action="#" method="post">

                <div class="row mbbt formDanhSachLoai">

                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>MÔ TẢ</th>
                            <th></th>

                        </tr>
                        <?php

                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham); //lấy đc tên biến gán vào dưới luôn
                            $suasp = "index.php?act=suasp&id=" . $id;
                            $xoasp = "index.php?act=xoasp&id=" . $id;
                            $hinhpath = "../upload/" . $images;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='" . $hinhpath . "' height='80'>";
                            } else {
                                $hinh = "no photo";
                            }
                            echo '
                               <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . $hinh . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $mota . '</td>
                                    <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                                        <a href="' . $xoasp . '"><input type="button" value="Xóa"></a>
                                    </td>
                               </tr>';
                        }


                        ?>


                    </table>
                </div>
                <br>
                <div class="row mbbt">
                    <input type="button" value="Chọn tất cả" id="">
                    <input type="button" value="Bỏ chọn tất cả" id="">
                    <input type="button" value="Xóa các mục đã chọn" id="">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" id=""></a>
                </div>
            </form>
        </div>

    </div>
</div>
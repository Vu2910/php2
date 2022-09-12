<?php

if (is_array($tours)) {
    extract($tours);
}
$hinhpath = "../upload/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}

?>

<div class="boxcenter">
    <div class="row mb header">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row">
        <div class="row formContent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listcategories as $categories) {
                            extract($categories);
                            if ($iddm == $id)  echo  '<option value="' . $id . '" selected>' . $name . '</option>';
                            else   echo  '<option value="' . $id . '" selected>' . $name . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" value="<?= $name ?>">
                </div>
                <div class="row mb10">
                    giá<br>
                    <input type="text" name="gia" value="<?= $price ?>">
                </div>
                <div class="row mb10">
                    Hình ảnh <br>
                    <input type="file" name="hinh" id="">
                    <?= $hinh ?>
                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" cols="30" rows="10" value="<?= $mota ?>">

                    </textarea>
                </div>
                <div class="row mb10 ">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                </div>
                <?php

                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

                ?>
            </form>
        </div>
    </div>
</div>
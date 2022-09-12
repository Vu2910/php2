
<div class=" boxcenter">
<div class="row mb header">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row">
        <div class="row formContent">
            <form action="#" method="post">

                <div class="row mbbt formDanhSachLoai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th></th>
                        </tr>
                        <?php
                           
                            foreach ($listcategories as $categories) {
                               extract($categories);
                               $suadm="index.php?act=suadm&id=".$id;
                               $xoadm="index.php?act=xoadm&id=".$id;
                               echo '
                               <tr>
                                    
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                        <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                                    </td>
                               </tr>';
                            }
                            

                        ?>
                       

                    </table>
                </div>
                <br>
                <div class="row mbbt">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" id=""></a>
                </div>
            </form>
        </div>

    </div>
</div>
<div class=" boxcenter">
    <div class="row mb header mb">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
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
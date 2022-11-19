<div class="row">
    <div class="row formtitle">
        <h1>Danh sách loại hàng</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdanhsach">
            <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình sản phẩm</th>
                    <th>Gía sản phẩm</th>
                    <th>Mô tả sản phẩm</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp ="index.php?act=suasp$id=".$id;
                    $xoasp ="index.php?act=xoasp$id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$img.'</td>
                    <td>'.$price.'</td>
                    <td>'.$mota.'</td>
                    <td><a href="'.$suasp.'"></a>
                        <input type="button" value="Sửa">
                        <a href="'.$xoasp.'"></a>
                        <input type="button" value="Xoá">
                    </td>
                </tr>';
                }
                ?>


            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="index.php?act=addsp">
                <input type="button" value="Thêm mới">
            </a>
        </div>
    </div>
</div>
</div>
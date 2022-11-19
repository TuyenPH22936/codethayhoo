<div class="row">
    <div class="row formtitle">
        <h1>Danh sách loại hàng</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdanhsach">
            <table>
                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm ="index.php?act=suadm$id=".$id;
                    $xoadm ="index.php?act=xoadm$id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$suadm.'"></a>
                        <input type="button" value="Sửa">
                        <a href="'.$xoadm.'"></a>
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
            <a href="admin.html">
                <input type="button" value="Thêm mới">
            </a>
        </div>
    </div>
</div>
</div>
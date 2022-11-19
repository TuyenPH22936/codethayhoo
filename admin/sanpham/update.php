<?php
if (is_array($sp)) {
    extract($sp);
}
?>

<div class="row">
    <div class="row formtitle">
        <h1>Thêm mới loại hàng hoá</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row mb10">
                Mã sản phẩm<br>
                <input type="text" name="masp" disabled>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Gía sản phẩm<br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                Hình sản phẩm<br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row mb10">
                Mô tả sản phẩm <br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp">
                    <input type="button" value="Danh sách">
                </a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
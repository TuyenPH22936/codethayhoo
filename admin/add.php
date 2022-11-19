<div class="row">
            <div class="row formtitle">
                <h1>Thêm mới loại hàng hoá</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                         Mã loại<br>
                        <input type="text" name="maloai">
                    </div>
                    <div class="row mb10">
                         Tên loại<br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Thêm mới" name="themoi">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=adddm">
                            <input type="button" value="Danh sách">
                        </a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao !=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
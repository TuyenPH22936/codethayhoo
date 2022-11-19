<?php
if(is_array($dm)){
    extract($dm);
}
?>

<div class="row">
            <div class="row formtitle">
                <h1>Thêm mới loại hàng hoá</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                         Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                         Tên loại<br>
                        <input type="text" name="tenloai" 
                        value="
                        <?php 
                        if(isset($name)&&($name!=""))
                        echo $name;
                        ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" value="Thêm mới" 
                        value="
                        <?php 
                        if(isset($id)&&($id!=""))
                        echo $id;  
                        ?>">
                        <input type="reset" value="Nhập lại">
                        <a href="danhsach.html">
                            <input type="button" value="Danh sách">
                        </a>
                    </div>
                </form>
            </div>
        </div>
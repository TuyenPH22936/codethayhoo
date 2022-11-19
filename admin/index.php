<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
   
    //Controller danh mục
    if(isset($_GET['act'])) {
        $act= $_GET['act'];
        switch ($act) {
            case 'adddm':   
                if(isset($_POST['themoi'])&&($_POST['themoi'])){
                    $tenloai =$_POST['tenloai'];
                   
                    insert_danhmuc($tenloai);
                    $thongbao="thêm thanh công";
                }
                include "danhmuc/add.php";
                break;

            case 'listdm':
                $listdanhmuc=loadall_danhmuc($sql);
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id'>0])){
                    $sql ="DELETE FROM danhmuc WHERE id=".$_GET['id'];
                    pdo_execute($sql);
                }
              
                $listdanhmuc=loadall_danhmuc($sql);
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id'>0])){
                    $sql ="SELECT * FROM danhmuc WHERE id=";
                $dm =pdo_query_one($spl);
               }

                $dm =loadone_danhmuc($id);
                include "danhmuc/update.php";
                break;
            case'updatedm':
                if(isset($_GET['capnhat'])&&($_GET['capnhat'>0])){
                    $tenloai =$_POST['tenloai'];
                    $id =$_POST['id'];     
                    update_danhmuc($id,$tenloai);
                    $thongbao ="cập nhật thành công";
                }
                $listdanhmuc= loadone_danhmuc($sql);
                include "danhmuc/list.php";
                break;


                /* controller sản phẩm */


            case 'addsp':
                    if(isset($_POST['themmoi'])&&($_POST['themoi'])){
                        $tensp =$_POST['iddm'];
                        $tensp =$_POST['tensp'];
                        $giasp =$_POST['giasp'];
                        $motasp =$_POST['mota'];
                        $filename =$_FILES['hinh']['name'];
                        if (move_uploaded_file($_FILES["hinh"]["name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                          } else {
                            // echo "Sorry, there was an error uploading your file.";
                          }
                        insert_sanpham($tensp,$giasp,$filename,$motasp,$iddm);
                        $thongbao="thêm thanh công";
                    }
                    $listdanhmuc=loadall_danhmuc($tenloai);
                    include "sanpham/add.php";
                    break;
    
            case 'listsp':
                    $listsanpham=loadall_sanpham($sql);
                    var_dump($listdanhmuc);
                    include "sanpham/list.php";
                    break;

            case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id'>0])){
                        $sql ="DELETE FROM sanpham WHERE id=".$_GET['id'];
                    }
                    $listsanpham=loadall_sanpham($sql);
                    include "sanpham/list.php";
                    break;

            case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id'>0])){
                        $sql ="SELECT *FROM sanpham WHERE id=";
                   }
                    include "sanpham/update.php";
                    break;
            case'updatesp':
                    if(isset($_GET['capnhat'])&&($_GET['capnhat'>0])){
                        $tenloai =$_POST['tenloai'];
                        $id =$_POST['id'];     
                        update_sanpham($id,$tenloai);
                        $thongbao ="cập nhật thành công";
                    }
                    $listsanpham=loadone_sanpham($sql);
                    include "sanpham/list.php";
                    break;

            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }


    include "footer.php";
?>
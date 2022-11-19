<?php
function pdo_get_connection(){
    $dburl="mysql:host=localhost;dbname=duanmau;charset=utf8";
    $user ="root";
    $password="";
    $conn =new PDO($dburl,$user,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
 function pdo_execute($spl){
     $sql_args= array_slice(func_get_args(),1);
     try{
         $conn = pdo_get_connection();
         $stmt =$conn->prepare($spl);
         $stmt->execute($sql_args);
     }catch(PDOException $e){
         throw $e;

     }finally{
         unset($conn);
     }
 }
 function pdo_query($spl){
     $sql_args=array_slice(func_get_args(),1);
     try{
        $conn = pdo_get_connection();
        $stmt =$conn->prepare($spl);
        $stmt->execute($sql_args);
        $rows =$stmt->fetchAll();
        return $rows;
     }catch(PDOException $e){
        throw $e;
     }finally{
        unset($conn);
    }
 }
 function pdo_query_one($spl){
     $sql_args =array_slice(func_get_args(),1);
     try{
        $conn = pdo_get_connection();
        $stmt =$conn->prepare($spl);
        $stmt->execute($sql_args);
        $row =$stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
     }catch(PDOException $e){
        throw $e;
     }finally{
        unset($conn);
    }
 }
 function pdo_query_value($spl){
     $sql_args=array_slice(func_get_args(),1);
     try{
        $conn = pdo_get_connection();
        $stmt =$conn->prepare($spl);
        $stmt->execute($sql_args);
        $row =$stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
     }catch(PDOException $e){
        throw $e;
     }finally{
        unset($conn);
 }
}
?>
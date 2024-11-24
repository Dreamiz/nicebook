<?php
include 'parts/header.php'
?>
<?php
$product_id=$_GET["id"]??null;
if ($product_id!=null){
    include_once("config/config.php");
    $cn=new mysqli(servername,username,password,dbname);
    if($cn->connect_error){            
        die("Lỗi kết nối:".$cn->connect_error);
    }
    $sql="delete from product where product_id ={$product_id}";
    $cn->query($sql);

    $cn->close();
}
header("location:product_list.php")
?>
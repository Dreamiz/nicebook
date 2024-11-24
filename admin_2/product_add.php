<?php
include 'parts/header.php'
?>
<?php 
if (isset($_POST["add"])){
    include_once("config/config.php");
    $cn=new mysqli(servername,username,password,dbname);
    if($cn->connect_error){            
        die("Lỗi kết nối:".$cn->connect_error);
    }
    // Xử lý ảnh đại diện
    $product_image = "";
    if (isset($_FILES["product_image"]) && $_FILES["product_image"]["error"] == 0) 
    {
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"],
         'uploads/'.basename($_FILES["product_image"]["name"]))) {
            $product_image = basename($_FILES["product_image"]["name"]); 
        }
    }

    // Xử lý nhiều ảnh sản phẩm
    $product_images = [];
    if (isset($_FILES["product_images"]) && count($_FILES["product_images"]["name"]) > 0) 
    {
        $total_images = count($_FILES["product_images"]["name"]);

        for ($i = 0; $i < $total_images; $i++) {
            if (move_uploaded_file($_FILES["product_images"]["tmp_name"][$i],
             'uploads/'.basename($_FILES["product_images"]["name"][$i]))) {
                $product_images[] = basename($_FILES["product_images"]["name"][$i]);
            }
        }
    }
    $product_images_str = implode("\n", $product_images);
    $cmd=$cn->prepare("insert into product 
    (product_name, product_authorname, product_price, product_saleprice, product_descript,product_image,product_images, product_detail) 
    values(?,?,?,?,?,?,?,?)");
    $cmd->bind_param("ssssssss",$product_name,$product_authorname, $product_price, $product_saleprice, $product_descript,$product_image,$product_images_str,$product_detail);

    $product_name=$_POST["product_name"];
    $product_authorname=$_POST["product_authorname"];
    $product_price=$_POST["product_price"];
    $product_saleprice=$_POST["product_saleprice"];
    $product_descript=$_POST["product_descript"];
    $product_detail=$_POST["product_detail"];
    if($cmd->execute()===true){
        $cn->close();
        header("location:product_list.php");
    }
    else{
        $cn->close();
    }
}
?>
<body>
    <section class="admin">
        <div class="row-grid">
            <?php
            include 'parts/sidebar.php'
            ?>
            <div class="admin-content">
                <div class="admin-content-top">
                    <div class="admin-content-top-left">
                        <ul class="flex-box">
                            <li><i class="ri-search-line"></i></li>
                            <li><i class="ri-drag-move-line"></i></li>
                        </ul>   
                    </div>
                    <div class="admin-content-top-right">
                        <ul class="flex-box">
                            <li><i class="ri-notification-4-line" number="3"></i></li>
                            <li><i class="ri-message-2-line" number="5"></i></li>
                            <li  class="flex-box">
                                <img style="width: 50px;" src="asset/images/logo.png" alt="">
                                <p>Mina<i class="ri-arrow-down-s-fill"></i></p>
                            </li>
                        </ul>
                    </div> 
                </div>
                <form method="post" enctype="multipart/form-data">
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <h1>Thêm sản phẩm</h1>
                    </div>
                       
                    <div class="admin-content-main-content">
                        <div class="admin-content-main-content-product-add">
                            <div class="admin-content-main-content-left">
                                <div class="admin-content-main-content-input-two-input">
                                    <input type="text" name="product_name" placeholder="Tên sản phẩm">
                                    <input type="text" name="product_authorname" placeholder="Tên tác giả">
                                </div>
                                <div class="admin-content-main-content-input-two-input">
                                    <input type="text" name="product_price" placeholder="Giá bán">
                                    <input type="text" name="product_saleprice" placeholder="Giá giảm">
                                </div>
                                    <textarea name="product_descript" id="" placeholder="Mô tả sản phẩm"></textarea>
                                    <textarea name="product_detail" id="" placeholder="Chi tết sản phẩm"></textarea>
                                    <br>
                                    <button name="add" class="main-btn">Thêm sản phẩm</button>
                            </div> 
                            <div class="admin-content-main-content-right">
                                <div class="admin-content-main-content-right-image">
                                    <label for="file">Ảnh đại diện</label>
                                    <input id="file" name="product_image" type="file" accept="image/*">
                                    <div class="image-show" id="image_show">

                                    </div>
                                </div>
                                <div class="admin-content-main-content-right-images">
                                    <label for="files">Ảnh sản phẩm</label>
                                    <input id="files" name="product_images[]" type="file" accept="image/*" multiple >
                                    <div class="images-show" id="images_show">
                                        
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                
                </div>
                </form>
            </div>
        </div> 
    </section>

    
    <footer>
    <?php
    include 'parts/footer.php'
    ?>
    <script>
        
// Hiển thị tên của ảnh đại diện
document.getElementById('file').addEventListener('change', function () {
    const fileName = this.files[0]?.name || 'Chưa chọn file';
    const imageShow = document.getElementById('image_show');
    imageShow.innerHTML = `<p>${fileName}</p>`;
});

// Hiển thị tên của các ảnh sản phẩm (nhiều ảnh)
document.getElementById('files').addEventListener('change', function () {
    const files = this.files;
    const imagesShow = document.getElementById('images_show');
    imagesShow.innerHTML = ''; // Xóa nội dung cũ
    if (files.length > 0) {
        for (let i = 0; i < files.length; i++) {
            const fileName = files[i].name;
            imagesShow.innerHTML += `<p>${fileName}</p>`;
        }
    } else {
        imagesShow.innerHTML = '<p>Chưa chọn file nào</p>';
    }
});
    </script>
    </footer>
</body>
</html>
<?php
include 'parts/header.php'
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
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <h1>Danh sách sản phẩm</h1>
                    </div>
                </div> 
                <div class="admin-content-main-content">
                    <div class="admin-content-main-content-product-list">
                        <table>
                            <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá bán</th>
                                    <th>Giá giảm</th>
                                    <th>Ngày đăng</th>
                                    <th>Tùy chỉnh</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $id=null;
                            if(isset($_GET["id"])){
                                $id=$_GET["id"];
                            }
                        
                            include_once("config/config.php");
                            $cn = new mysqli(servername, username, password, dbname);
                            if ($cn->connect_error) {
                                die("Lỗi kết nối: " . $cn->connect_error);
                            }

                            $sql = "SELECT product_id, product_name, product_price, product_saleprice, product_image, product_date FROM product ORDER BY product_id DESC";
                            $result = $cn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>{$row['product_id']}</td>";
                                    echo "<td><img src='uploads/{$row['product_image']}' alt='Ảnh sản phẩm' style='width: 70px;'></td>";
                                    echo "<td>{$row['product_name']}</td>";
                                    echo "<td>{$row['product_price']}</td>";
                                    echo "<td>{$row['product_saleprice']}</td>";
                                    echo "<td>{$row['product_date']}</td>";
                                    echo "<td>
                                        <a href='product_edit.php?id={$row['product_id']}' class='edit-class' style ='display: inline-block;'>Sửa</a>
                                        |
                                        <a href='delete.php?id={$row['product_id']}' class='delete-class' style ='display: inline-block; onclick='return confirm(\"Bạn có chắc muốn xóa sản phẩm này?\");'>Xóa</a>
                                    </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='8'>Không có sản phẩm nào!</td></tr>";
                            }
                            $cn->close();
                            ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
        </div> 
    </section>
    <footer>
    <?php
    include 'parts/footer.php'
    ?>
    </footer>
</body>
</html>
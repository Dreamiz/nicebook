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
                        <h1>Chi tiết đơn hàng</h1>
                    </div>
                </div> 
                <div class="admin-content-main-content">
                    <div class="admin-content-main-content-product-order-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Tùy biến</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img style="width: 70px;" src="asset/images/khong-phai-soi-nhung-cung-dung-la-cuu_1.1.jpg" alt=""></td>
                                    <td>Không phải sói nhưng cũng đừng là cừu</td>
                                    <td>50.000</td>
                                    <td>2</td>
                                    <td>100.000</td>
                                    <td>
                                        <a class="delete-class" href="">Xóa</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td><img src="" alt="#"></td>
                                    <td>Thiên tài bên trái kẻ điên bên phải</td>
                                    <td>50.000</td>
                                    <td>1</td>
                                    <td>50.000</td>
                                    <td>
                                        <a class="delete-class" href="">Xóa</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 700;" colspan="5">Tổng cộng</td>
                                    <td>150.000</td>
                                </tr>
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
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
                        <h1>Danh sách đơn hàng</h1>
                    </div>
                </div> 
                <div class="admin-content-main-content">
                    <div class="admin-content-main-content-product-order-list">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Gia chú</th>
                                    <th>Chi tiết</th>
                                    <th>Ngày</th>
                                    <th>Trạng thái</th>
                                    <th>Tùy biến</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Văn A</td>
                                    <td>0973999949</td>
                                    <td>nicebook65.@gmail.com</td>
                                    <td>Gò vấp, thành phố Hồ Chí Minh</td>
                                    <td>Giao nhanh</td>
                                    <td>
                                        <a class="edit-class" href="order_detail.php">Xem</a>
                                    </td>
                                    <td>2023-10-27</td>
                                    <td>
                                        <a class="confirm-order" href="">Đã xác nhận</a>
                                    </td>
                                    <td>
                                        <a class="delete-class" href="">Xóa</a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>Võ Thị B</td>
                                    <td>0973996949</td>
                                    <td>nicebook67.@gmail.com</td>
                                    <td>Bình Thuận, thành phố Hồ Chí Minh</td>
                                    <td>Giao nhanh</td>
                                    <td>
                                        <a class="edit-class" href="">Xem</a>
                                    </td>
                                    <td>2023-10-27</td>
                                    <td>
                                        <a class="nonconfirm-order" href="">Chưa xác nhận</a>
                                    </td>
                                    <td>
                                        <a class="delete-class" href="">Xóa</a>
                                    </td>
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
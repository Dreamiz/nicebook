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
                        <h1>Dashboard</h1>
                    </div>
                </div> 
                <div class="admin-content-main-content">
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
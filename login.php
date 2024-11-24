<?php
session_start();
$error="";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra thông tin đăng nhập
    if ($username === "admin" && $password === "1234") {
        $_SESSION["username"] = $username;
        header("Location: index.html");
        exit;
    } else {
        $error="Tên đăng nhập hoặc mật khẩu không đúng!";
        
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style-login.css">
    <title>Đăng Nhập</title>
</head>
<body>

    <div class="login-container">
        <h1>Đăng Nhập</h1>
        <?php if (!empty($error)): ?>
            <p style="color:red; text-align:center;"><?= $error ?></p>
        <?php endif; ?>

        <form action="login.php" method="post" onsubmit="return validateForm()">
            <label for="username">Tên đăng nhập</label>
            <input type="text" id="username" name="username" required><br><br>
            
            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <button type="submit">Đăng Nhập</button>
        </form>
        <nav>
            <a href="">Đăng Ký </a> |
            <a href="index.html">Trang Chủ</a>
        </nav>
    </div>
    <script src="asset/js/script-login.js"></script>
    
</body>
</html>

<?php
include 'parts/header.php'
?>
<?php
include_once("config/config.php");
$id = $_GET['product_id']; // Lấy id từ URL để tìm sản phẩm cần cập nhật
$cn = new mysqli(servername, username, password, dbname);

if ($cn->connect_error) {
    die("Lỗi kết nối: " . $cn->connect_error);
}

// Lấy thông tin sản phẩm từ cơ sở dữ liệu
$sql = "SELECT * FROM product WHERE product_id = {product_id}";
$result = $cn->query($sql);
$product = $result->fetch_assoc();
$product_name=$row['product_name']

// Nếu sản phẩm không tồn tại, chuyển hướng về trang danh sách
if (!$product) {
    header("Location: product_list.php");
    exit();
}

// Xử lý khi người dùng gửi form cập nhật
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_saleprice = $_POST['product_saleprice'];
    $product_descript = $_POST['product_descript'];
    $product_detail = $_POST['product_detail'];

    // Xử lý ảnh đại diện
    $product_image = $product['product_image']; // Giữ lại ảnh cũ nếu không thay đổi
    if (isset($_FILES["product_image"]) && $_FILES["product_image"]["error"] == 0) {
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], 'uploads/' . basename($_FILES["product_image"]["name"]))) {
            $product_image = basename($_FILES["product_image"]["name"]);
        }
    }

    // Cập nhật thông tin sản phẩm
    $sql_update = "UPDATE product SET product_name = ?, product_price = ?, product_saleprice = ?, product_descript = ?, product_detail = ?, product_image = ? WHERE product_id = ?";
    $stmt_update = $cn->prepare($sql_update);
    $stmt_update->bind_param("ssssssi", $product_name, $product_price, $product_saleprice, $product_descript, $product_detail, $product_image, $id);
    
    if ($stmt_update->execute()) {
        header("Location: product_list.php"); // Sau khi cập nhật, chuyển hướng đến danh sách sản phẩm
    } else {
        echo "Lỗi cập nhật sản phẩm!";
    }
}

$cn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sản phẩm</title>
    <style>
        button, input[type='submit'] {
            padding: 10px;
            margin: 5px;
        }
        textarea {
            width: 100%;
            height: 100px;
        }
    </style>
</head>
<body>

<h1>Chỉnh sửa sản phẩm</h1>
<form method="post" enctype="multipart/form-data">
    <label for="product_name">Tên sản phẩm:</label>
    <input type="text" id="product_name" name="product_name" required value="<?= htmlspecialchars($product['product_name']) ?>"><br><br>

    <label for="product_price">Giá bán:</label>
    <input type="text" id="product_price" name="product_price" required value="<?= htmlspecialchars($product['product_price']) ?>"><br><br>

    <label for="product_saleprice">Giá giảm:</label>
    <input type="text" id="product_saleprice" name="product_saleprice" value="<?= htmlspecialchars($product['product_saleprice']) ?>"><br><br>

    <label for="product_descript">Mô tả sản phẩm:</label>
    <textarea id="product_descript" name="product_descript"><?= htmlspecialchars($product['product_descript']) ?></textarea><br><br>

    <label for="product_detail">Chi tiết sản phẩm:</label>
    <textarea id="product_detail" name="product_detail"><?= htmlspecialchars($product['product_detail']) ?></textarea><br><br>

    <label for="product_image">Ảnh đại diện:</label>
    <input type="file" id="product_image" name="product_image" accept="image/*"><br><br>

    <input type="submit" value="Cập nhật sản phẩm">
</form>

<a href="product_list.php"><button>Quay lại danh sách sản phẩm</button></a>
<footer><?php
    include 'parts/footer.php'
    ?></footer>
</body>
</html>

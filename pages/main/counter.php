<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";  // Thay bằng tên người dùng MySQL của bạn
$password = "";      // Thay bằng mật khẩu MySQL của bạn
$dbname = "web_mysqli"; // Tên cơ sở dữ liệu mà bạn đã tạo

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tăng số lượt truy cập
$sql = "UPDATE page_views SET view_count = view_count + 1 WHERE id = 1";
$conn->query($sql);

// Lấy giá trị hiện tại
$sql = "SELECT view_count FROM page_views WHERE id = 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row['view_count'];

$conn->close();

echo "This page has been visited $count times.";
?>
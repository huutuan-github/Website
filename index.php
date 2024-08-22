<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Web Phụ Kiện Bán Điện Thoại</title>
</head>
<body>
    <div class="wrapper">
        <?php
            session_start();
            include("admincp/config/config.php");
            include("pages/header.php");
            include("pages/menu.php");
            include("pages/main.php");
            include("pages/footer.php");
            
        ?>
 
    </div>
    <script>
const slides = document.querySelectorAll('.header .slides');
let currentIndex = 0;

function changeBackgroundImage() {
    slides.forEach((slide, index) => {
        slide.classList.toggle('hidden', index !== currentIndex);
    });

    currentIndex = (currentIndex + 1) % slides.length;
}

// Khởi tạo các hình ảnh nền
slides[0].style.backgroundImage = 'url("../images/tainghe.jpg")';
slides[1].style.backgroundImage = 'url("../images/banner1.jpg")';
slides[2].style.backgroundImage = 'url("../images/banner3.jpg")';

setInterval(changeBackgroundImage, 3000); // Thay đổi hình ảnh mỗi 3 giây
</script>
</body>
</html> 

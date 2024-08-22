
<p>Giỏ Hàng
  <?php
   if(isset($_SESSION['dangky'])){
     echo 'Xin Chào:'.'<span style="color: red">'.$_SESSION['dangky'] .'</span>';
    // echo $_SESSION['id_khachhang'];
   }
  ?>
</p>
<?php
    if(isset($_SESSION["cart"])){

    }
?>

</div>
<table style="width: 79%;text-align:center; border-collapse:collapse;" border="1">
  <tr>
    <th>Id</th>
    <th>Mã Sản Phẩm</th>
    <th>Tên Sản Phẩm</th>
    <th>Hình Ảnh</th>
    <th>Số Lượng</th>
    <th>Giá Sản Phẩm</th>
    <th>Thành Tiền</th>
    <th>Quản Lý</th>
  </tr>
  <?php
  if(isset($_SESSION["cart"])){
    $i = 0; 
    $tongtien =0;
    foreach($_SESSION["cart"] as $cart_time){
        $thanhtien = $cart_time['soluong']*$cart_time['giasp'];
        $tongtien+=$thanhtien;
        $i++;
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $cart_time['masp'];?></td>
    <td><?php echo $cart_time['tensanpham'];?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_time['hinhanh'];?>" width="130px"></td>
    <td>
      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_time['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
      <?php echo $cart_time['soluong'];?>
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_time['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
    </td>
    <td><?php echo number_format($cart_time['giasp'],0,',','.').'vnđ';?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_time['id'] ?>">Xóa</a></td>
  </tr>
  <?php
    }
    ?>
    <tr>
    <td colspan="8">
      <p style="float:left;">Tổng Tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>
      <p style="float:right;"><a href="pages/main/themgiohang.php?xoatatca=1"><svg style="width: 17px; height:15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>Xóa Tất Cả</a></p>
      <div style="clear:both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
            <p><a href="pages/main/thanhtoan.php"><svg style="width: 20px; height: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
          </svg>Đặt Hàng</a></p>
        <?php
        }else{
          ?>
            <p><a href="index.php?quanly=dangky"> Đăng Ký Đặt Hàng</a></p>
      <?php
        }
      ?>
  


    </td>
    
 
  </tr>
    <?php

  }else{
  ?>
  <tr>
    <td colspan="8"><p>Hiện Tại Giỏ Hàng Trống</p></td>
 
  </tr>
  <?php
  }
  ?>
  

</table>

<p>Giỏ Hàng
  <?php
   if(isset($_SESSION['dangky'])){
     echo 'Xin Chào:'.'<span style="color: red">'.$_SESSION['dangky'] .'</span>';
     echo $_SESSION['id_khachhang'];
   }
  ?>
</p>
<?php
    if(isset($_SESSION["cart"])){

    }
?>


</div>
<table style="width: 100%;text-align:center; border-collapse:collapse;" border="1">
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
      <p style="float:right;"><a href="pages/main/themgiohang.php?xoatatca=1">Xóa Tất Cả</a></p>
      <div style="clear:both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
            <p><a href="pages/main/thanhtoan.php">Đặt Hàng</a></p>
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
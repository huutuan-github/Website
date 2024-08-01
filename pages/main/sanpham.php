<p>Chi Tiết Sản Phẩm</p>
<?php
    $sql_chitiet  = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
    <div class="hinhanh_sanpham">
        <img width="85%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
        <div class="chitiet_sanpham">
                <h3 style="margin: 0">Tên Sản Phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
                <p>Mã Sản Phẩm: <?php echo $row_chitiet['masp'] ?></p>
                <p>Giá: <?php echo number_format(  $row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
                <p>Số lượng: <?php echo $row_chitiet['soluong']?></p>
                <p>Danh Mục: <?php echo $row_chitiet['tendanhmuc']?></p>
                <p><input class="themgiohang"  name="themgiohang" type="submit" value="Thêm Giỏ Hàng"></p>
        </div>
    </form>
</div>
<?php
}
?>
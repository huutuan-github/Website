<p>Liên Hệ</p>
<h2>
    <td>Huỳnh Giang Hữu Tuấn</td>
    <td>std: 0702085106</td>
</h2>
<?php
    $sql_lh = "SELECT * FROM tbl_lienhe WHERE id=1";
    $query_lh = mysqli_query($mysqli,$sql_lh);
?>

    <?php
        while($dong = mysqli_fetch_array($query_lh)) {
        ?>
            <p><?php echo $dong['thongtinlienhe'] ?></p>
      <?php
        }
      ?>


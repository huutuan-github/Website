<p>Lien He</p>
<h2>
    <td>Huỳnh Giang Hữu Tuấn</td>
    <tr a href="tef:070085106">Sđt</tr>
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


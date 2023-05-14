<?php 
    require_once "../database/dbprojecweb2.php";
    include_once "../template/head.php";

?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<div class="container">
    <h2 class="text-center">View Produk</h2>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><?=$row['nama']?></td>
            </tr>
            <tr>
                <td>Harga </td>
                <td><?=$row['harga']?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><?=$row['stok']?></td>
            </tr>
                <td>Merk id</td>
                <td><?=$row['merk_id']?></td>
            </tr>
        </tbody>
    </table>
</div>
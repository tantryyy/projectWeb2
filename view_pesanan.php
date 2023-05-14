<?php 
    require_once "../database/dbprojecweb2.php";
    include_once "../template/head.php";

?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pesanan a
    //INNER JOIN jenis_pesanan b ON a.jenis_pesanan_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PESANAN ' . $row['nama'];
?>

<div class="container">
    <h2 class="text-center">View Pesanan</h2>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Tanggal </td>
                <td><?=$row['tanggal']?></td>
            </tr>
            <tr>
                <td>Produk id </td>
                <td><?=$row['produk_id']?></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><?=$row['quantity']?></td>
        </tbody>
    </table>
</div>
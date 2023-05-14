<?php 
    require_once "../database/dbprojecweb2.php";
    include_once "../template/head.php";
?>
<?php
    $_id = $_GET['id'];
    // select * from merk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM merk WHERE  id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<div class="container">
    <h2 class="text-center">View Merk</h2>
    <div class="mb-3">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Nama Merk</td>
                <td><?=$row['nama_merk']?></td>
            </tr>
            </tr>
        </tbody>
    </table>
</div>

<?php
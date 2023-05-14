<?php 
    require_once "../database/dbprojecweb2.php";
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
} else {
    $row = [];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Produk</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Produk</h2>
    <?php 
    $sql = "SELECT * FROM produk WHERE  id=?";
    $st = $dbh->prepare($sql);
    ?>
    <form method="POST" action="proses_produk.php">
    <div class="mb-3">
        <label for="id" class="form-label">Id :</label>
        <input id="id" name="id" type="text" class="form-control" value="<?= $row['id']?>">
        <div  class="form-text">Input id.</div>
    </div><br>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama :</label>
        <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama']?>">
        <div  class="form-text">Input Nama .</div>
    </div><br>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok:</label>
        <input id="stok" name="stok" type="text" class="form-control" value="<?= $row['stok']?>">
        <div  class="form-text">Input Stok.</div>
    </div><br>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga :</label>
        <input id="harga" name="harga" type="text" class="form-control" value="<?= $row['harga']?>">
        <div  class="form-text">Input Harga.</div>
    </div><br>
    <div class="mb-3">
        <label for="merk_id" class="form-label">Merk id :</label>
        <input id="merk_id" name="merk_id" type="text" class="form-control" value="<?= $row['merk_id']?>">
        <div  class="form-text">Input Merk id.</div>
    </div>
    <div class="form-group row">
            <div class="offset col-8">
                <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
                <input type="submit" name="proses" type="submit" class="btn btn-info" value="<?= $button ?>" />
                <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
            </div>
        </div>
    </form>
</div>
</body>
</html>


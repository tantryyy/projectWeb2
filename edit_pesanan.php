<?php 
    require_once "../database/dbprojecweb2.php";
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM pesanan WHERE id=?";
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
	<title>Edit Pesanan</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Pesanan</h2>
    <?php 
    $sql = "SELECT * FROM pesanan WHERE  id=?";
    $st = $dbh->prepare($sql);
    ?>
    <form method="POST" action="proses_pesanan.php">
    <div class="mb-3">
        <label for="id" class="form-label">Id :</label>
        <input id="id" name="id" type="text" class="form-control" value="<?= $row['id']?>">
        <div  class="form-text">Input id.</div>
    </div><br>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal:</label>
        <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $row['tanggal']?>">
        <div  class="form-text">Input Tanggal.</div>
    </div><br>
    <div class="mb-3">
        <label for="produk_id" class="form-label">Produk id :</label>
        <input id="produk_id" name="produk_id" type="text" class="form-control" value="<?= $row['produk_id']?>">
        <div  class="form-text">Input Produk id.</div>
    </div><br>
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity :</label>
        <input id="quantity" name="quantity" type="text" class="form-control" value="<?= $row['quantity']?>">
        <div class="form-text">Input Quantity.</div>
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
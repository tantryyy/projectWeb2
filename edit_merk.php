<?php 
    require_once "../database/dbprojecweb2.php";
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM merk WHERE id=?";
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
	<title>Edit Merk</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Merk</h2>
    <?php 
    $sql = "SELECT * FROM merk WHERE  id=?";
    $st = $dbh->prepare($sql);
    ?>
    <form method="POST" action="proses_merk.php">
    <div class="mb-3">
        <label for="id" class="form-label">id :</label>
        <input id="id" name="id" type="text" class="form-control" value="<?= $row['id']?>">
        <div class="form-text">Input id.</div>
    </div><br>
    <div class="mb-3">
        <label for="nama_merk" class="form-label">Nama Merk :</label>
        <input id="nama_merk" name="nama_merk" type="text" class="form-control" value="<?= $row['nama_merk']?>">
        <div class="form-text">Input Nama Merk.</div>

        <div class="form-group row">
            <div class="offset col-8">
                <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
                <input type="submit" name="proses" type="submit" class="btn btn-info" value="<?= $button ?>" />
                <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
            </div>
        </div>
</div>

</body>
</html>
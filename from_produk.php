<?php 
    require_once "../database/dbprojecweb2.php";
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Produk</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Tambah Produk</h2>
    <form method="POST" action="proses_produk.php">
        <div class="form-group">
            <label for="id" class="form-label">Id :</label>
            <input id="id" name="id" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama" class="form-label">Nama  :</label>
            <input id="nama" name="nama" type="text" class="form-control" required>
        </div>
            <div class="form-group">
            <label for="stok" class="form-label">Stok :</label>
            <input id="stok" name="stok" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga" class="form-label">Harga :</label>
            <input id="harga" name="harga" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="merk_id" class="form-label">Merk id :</label>
            <input id="merk_id" name="merk_id" type="text" class="form-control" required>
        </div>
    <div class="form-group mt-4">
        <div class="btn-group btn-group-lg" class="container">
            <input type="submit" name="proses" class="btn btn-info form-control" value="Simpan" />
        </div>
    </form>
</div>

</body>
</html>
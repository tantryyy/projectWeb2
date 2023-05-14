<?php 
   require_once "../database/dbprojecweb2.php";
?>
<?php 
   $_id = $_POST['id'];
   $_tanggal = $_POST['tanggal'];
   $_produk = $_POST['produk_id'];
   $_quantity = $_POST['quantity'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; 
   $ar_data[]=$_tanggal; 
   $ar_data[]=$_produk; 
   $ar_data[]=$_quantity; 
  

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (id,tanggal,produk_id,quantity) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE pesanan SET id=?,tanggal=?,produk_id=?,quantity=? WHERE id=?";
   }
   if(isset($sql)){
      $st = $dbh->prepare($sql);
      $st->execute($ar_data);
   }

   header('location:pesanan.php');
?>
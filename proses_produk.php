<?php 
   require_once "../database/dbprojecweb2.php";
?>
<?php 
   $_id = $_POST['id'];
   $_nama = $_POST['nama'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_merk = $_POST['merk_id'];
   
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 1
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_stok; // ? 3
   $ar_data[]=$_harga; 
   $ar_data[]=$_merk; 
  

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (id,nama,stok,harga,merk_id) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// 4
    $sql = "UPDATE produk SET id=?,nama=?,stok=?,harga=?,merk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:produk.php');
?>
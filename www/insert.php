<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $kode=$_POST['kode'];
 $jenis=$_POST['jenis'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`nama`,`harga`,`kode`,`jenis`,`jumlah`) VALUES ('$nama','$harga','$kode','$jenis','$jumlah')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
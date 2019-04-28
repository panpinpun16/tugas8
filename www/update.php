<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
 $kode=$_POST['kode'];
 $jenis=$_POST['jenis'];
 $jumlah=$_POST['jumlah'];
 $q=mysqli_query($con,"UPDATE `barang` SET `nama`='$nama',`harga`='$harga',`kode`='$kode',`jenis`='$jenis',`jumlah`='$jumlah' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
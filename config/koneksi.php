<?php

date_default_timezone_set('Asia/Jakarta');
$conn = mysqli_connect 
   (
    "localhost",
    "root",
    "",
    "accomodation"
   );
if (mysqli_connect_errno())
 {
  echo "Koneksi Gagal"
  .mysqli_connect_error();
 }
 $base_url="http://localhost/accomodation/";
?>
<?php
 
   session_start();
   include "koneksi.php";

   $komentarId = $_GET['komentarid']; 
    $fotoid=$_GET['fotoid'];
   $sql = mysqli_query($conn, "DELETE FROM komentarfoto WHERE komentarid='$komentarId'"); 

   if($sql) {
       header("location:komentar.php?fotoid=$fotoid");
   } else {

       echo "Gagal menghapus komentar.";
   }
?>

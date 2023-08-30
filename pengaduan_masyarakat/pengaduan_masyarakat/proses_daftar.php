<?php 
 session_start(); 
 include "koneksi.php"; 
 $nik = $_POST['nik']; 
 $nama = $_POST['nama']; 
 $username = $_POST['username']; 
 $password = $_POST['password']; 
 $telepon = $_POST['telepon']; 
 $query = $koneksi->query("INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telepon')"); 
  
 if ($query) { 
  
     $_SESSION['nik'] = $nik; 
     $_SESSION['level'] = 'masyarakat'; 
  
     header("location:home.php"); 
 //} else { 
 //    var_dump($koneksi->errorInfo()); 
 }
?>
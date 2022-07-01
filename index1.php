<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi CRUD mahasiswa dengan PHP dan MySQL</title>
 <style type="text/css">
 body {
  margin:5px;
  font-family: verdana;
  font-size: 12px;
 }
 a { text-decoration: none; color: blue; }
 a:hover { text-decoration: underline; color: green; }
 </style>
</head>
<body>
<h2>Aplikasi CRUD Data Mahasiswa</h2>
<hr>
<a href="index.php">Beranda</a> | 
<a href="index.php?p=mahasiswa"> Mahasiswa</a>
<hr>
<?php
$p = isset($_GET['p'])?$_GET['p']:'';

if($p == "mahasiswa") { include "mahasiswa.php"; }
else { include "beranda.php"; }
?>
<hr>
<div align="center">
&copy; 2017 - <a href='www.belajarwebpedia.com'>belajarwebpedia.com</a>
</div>
</body>
</html>

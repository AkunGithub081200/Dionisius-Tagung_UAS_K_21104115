<?php
// copyright www.belajarwebpedia.com
include "koneksi.php";

$nim  = trim($_POST[nim]);
$nama  = trim($_POST[nama]);
$gender = trim($_POST[gender]);
$idps  = trim($_POST[idps]);
$idkls  = trim($_POST[idkls]);

//cek tidak boleh ada nim yang sama
$cek = mysql_num_rows(mysql_query("SELECT * FROM mahasiswa WHERE nim='$nim' "));
if ($cek == 0)
{
 $sql = "INSERT INTO mahasiswa (nim, nama, gender, idps, idkls) VALUES 
    ('$nim', '$nama', '$gender', '$idps', '$idkls') ";
 mysql_query($sql);
 $pesan = "Data berhasil tersimpan";
}
else { $pesan = "Maaf NIM telah terdaftar"; }
?>
<script>
 alert('<?php echo $pesan;?>');
 location='index.php?p=mahasiswa';
</script>
<?php
//copyright www.belajarwebpedia.com
//control tampilan akses menu
$act = isset($_GET['act'])?$_GET['act']:'';
if($act == "tambah") { include "mhs-tambah.php"; }
else if($act == "edit") { include "mhs-edit.php"; }
else {
?>
<h2>Daftar Data Mahasiswa </h2>
<hr>
<a href="index.php?p=mahasiswa&act=tambah">Tambah Data</a>
<hr>
<table width="100%" cellpadding="4" cellspacing="1" bgcolor="#ccc">
<tr>
 <th bgcolor="#eee" width="30">No</th>
 <th bgcolor="#eee" width="100">NIM</th>
 <th bgcolor="#eee">Nama</th>
 <th bgcolor="#eee" width="100">Gender</th>
 <th bgcolor="#eee" width="120">Program Studi</th>
 <th bgcolor="#eee" width="100">Kelas</th>
 <th bgcolor="#eee" width="50">Edit</th>
 <th bgcolor="#eee" width="50">Hapus</th>
</tr>
<?php
$sql   = "SELECT mahasiswa.*, program_studi.nama_ps, kelas.nama_kls FROM mahasiswa
   LEFT JOIN program_studi ON mahasiswa.idps=program_studi.idps
   LEFT JOIN kelas ON mahasiswa.idkls = kelas.idkls ORDER BY nim ASC";
$query = mysql_query($sql);
$total = mysql_num_rows($query);

$no = 1;
while ($data=mysql_fetch_array($query))
{
 if($data[gender] == "L") { $gender = "Laki-laki";}
  else { $gender = "Perempuan";}

 echo "<tr>
   <td bgcolor='#fff'>$no</td>
   <td bgcolor='#fff'>$data[nim]</td>
   <td bgcolor='#fff'>$data[nama]</td>
   <td bgcolor='#fff'>$gender</td>
   <td bgcolor='#fff'>$data[nama_ps]</td>
   <td bgcolor='#fff'>$data[nama_kls]</td>
   <td bgcolor='#fff'>
   <a href='index.php?p=mahasiswa&act=edit&nim=$data[nim]'>Edit</a>
   </td>
   <td bgcolor='#fff'>
   <a href='mhs-delete.php?nim=$data[nim]'>Hapus</a>
   </td>
    </tr>";
$no++;
}
?>
<tr>
 <td colspan="8" bgcolor="#999" style="color: #fff;" >
  Total : <?php echo "$total Data";?>
 </td>
</tr>
</table>
<?php
} //tutup else
?>

<h2>Tambah Data Mahasiswa</h2>
<hr>
<form action="mhs-insert.php" method="post">
<table border="0" width="100%">
<tr>
 <td width="120">NIM</td>
 <td>: <input type="text" name="nim" required></td>
</tr>
<tr>
 <td width="120">Nama Lengkap</td>
 <td>: <input type="text" name="nama" required></td>
</tr>
<tr>
 <td width="120">Gender</td>
 <td>: <input type="radio" name="gender" value="L" checked> Laki-laki 
    <input type="radio" name="gender" value="P"> Perempuan 
 </td>
</tr>
<tr>
 <td width="120">Program Studi</td>
 <td>: <select name="idps">
    <?php
    $q=mysql_query("SELECT * FROM program_studi");
    while($d=mysql_fetch_array($q))
    {
     echo "<option value='$d[idps]'> $d[nama_ps] </option>";
    }
    ?>
    </select>
 </td>
</tr>
<tr>
 <td width="120">Kelas</td>
 <td>: <select name="idkls">
    <?php
    $q=mysql_query("SELECT * FROM kelas");
    while($d=mysql_fetch_array($q))
    {
     echo "<option value='$d[idkls]'> $d[nama_kls] </option>";
    }
    ?>
    </select>
 </td>
</tr>
<tr>
 <td width="120"></td>
 <td>&nbsp; <input type="submit" value="Simpan Data"></td>
</tr>
</table>
</form>

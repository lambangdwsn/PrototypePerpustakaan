<?php
include "top.php";
?>
<div class="content">
<div style="background: gray;width: 100%; padding: 40px; border-radius: 5px;">
<a href="input_pegawai.php" style="background: green;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">Tambah data pegawai</a>

<a href="#" style="background: green; margin: auto; color: white;padding: 10px; text-decoration: none; border-radius: 5px; float: right"><i class="fa fa-download"></i> Unduh Laporan</a>
</div>
<div class="zebra">
<table border="1">
	<tr>
		<th>Gambar</th>
		<th>NIP</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th style="background: blue;color: white;">Proses</th>
	</tr>
	<tr>
		<td><img src="pegawai.jpg"></td>
		<td>P0008</td>
		<td>Agus Ardian</td>
		<td>Wonogiri</td>
		<td>
		<a href="input_pegawai.php" style="background: blue;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">edit</a><a href="#contact" style="background: red;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">hapus</a>
		</td>
	</tr>
	<tr>
		<td><img src="noprofile.jpg"></td>
		<td>P0007</td>
		<td>Agus Ardian</td>
		<td>Wonogiri</td>
		<td>
		<a href="input_pegawai.php" style="background: blue;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">edit</a><a href="#contact" style="background: red;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">hapus</a>
		</td>
	</tr>
	<tr>
		<td><img src="noprofile.jpg"></td>
		<td>P0004</td>
		<td>Agus Ardian</td>
		<td>Wonogiri</td>
		<td>
		<a href="input_pegawai.php" style="background: blue;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">edit</a><a href="#contact" style="background: red;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">hapus</a>
		</td>
	</tr>
	<tr>
		<td><img src="noprofile.jpg" height="100px" width="80px"></td>
		<td>P0019</td>
		<td>Cahyo Saputra</td>
		<td>Bantul</td>
		<td>
		<a href="input_pegawai.php" style="background: blue;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">edit</a><a href="#contact" style="background: red;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">hapus</a>
		</td>
	</tr>
	<tr>
		<td><img src="noprofile.jpg"></td>
		<td>P0066</td>
		<td>Ridwan Saputra</td>
		<td>Kalasan</td>
		<td>
		<a href="input_pegawai.php" style="background: blue;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">edit</a><a href="#" style="background: red;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">hapus</a>
		</td>
	</tr>
	<tr>
		<td><img src="noprofile.jpg"></td>
		<td>P0029</td>
		<td>Putra Aji</td>
		<td>Bantul</td>
		<td>
		<a href="input_pegawai.php" style="background: blue;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">edit</a><a href="#" style="background: red;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">hapus</a>
		</td>
	</tr>
</table>
</div>
<div class="page">
<a href="#"> < </a>
<?php
for($i=0;$i<5;$i++){
echo'<a href="#"> '.($i+1).' </a>';
}
?>
 <a href="#"> > </a>
</div>
</div>
<?php
include "bottom.php";
?>

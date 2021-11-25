<?php
include "top.php";
?>
<div class="content">
<table>
	<tr>
		<td><img src="member.jpg" width="200px" height="290px"></td>
		<td width="50px"></td>
		<td valign="bottom" style="font-size: 20px">
			<table>
				<tr>
		<td>Id Anggota</td>
		<td>:</td>
		<td>P0008</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>Bagas Tri Utama</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>Wonogiri</td>
	</tr>
			</table>
		</td>
	</tr>

</table>
<h3 style="float: left">Buku yang sedang dipinjam</h3><br><br><br><br>
<table class="zebra" style="width: 80%;">
	<tr>
		<th>Id buku</th>
		<th>Judul</th>
		<th>Tanggal pinjam</th>
		<th>Tenggat</th>
		<th>denda</th>
	</tr>
	<tr>
		<td>BK117</td>
		<td>Akuntansi kesehatan</td>
		<td>7-3-2021</td>
		<td>7 hari</td>
		<td>-</td>
	</tr>
</table>
<h3 style="float: left">Rencana pinjam</h3><br><br><br><br>
<table class="zebra" style="width: 80%;">
	<tr>
		<th>Id buku</th>
		<th>Judul</th>
		<th>Penerbit</th>
		<th>Tanggal</th>
		<th style="background: blue;color: white;">Aksi</th>
	</tr>
	<tr>
		<td>BK188</td>
		<td>Akuntansi kesehatan</td>
		<td>Gramedia</td>
		<td>15-03-2021</td>
		<td><a href="#" style="background: red;color: white; padding: 5px; border-radius: 5px;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
	</tr>
</table>

</div>
<?php
include "bottom.php";
?>

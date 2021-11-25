<?php include "top.php"?>
<div class="input">
<h1>Pengembalian Perpustakaan</h1>
	<div class="container">
		<form action="" method="post">
			<fieldset>
				<legend>Pengembalian</legend>
				<p>
					<label for="idanggota">ID Anggota : </label>
					<input type="text" name="idanggota" id="idanggota">
				</p>
				<p>
					<label for="idbuku">ID Buku : </label>
					<input type="text" name="idbuku" id="idbuku">
				</p>
				<p>
					<label for="status">Status : </label>
					<select id="status">
						<option value="Tepat Waktu">Tepat Waktu</option>
						<option value="Terlambat">Terlambat</option>
						<option value="Rusak">Rusak</option>
						<option value="Hilang">Hilang</option>
					</select>
				</p>
				<p>
					<label for="tgl">Tgl Kembali : </label><br>
					<input type="date" name="tgl" id="tgl">
				</p>
			</fieldset>
			<p>
				<input type="submit" name="submit" value="Proses">
			</p>
		</form>
		</div>
</div>
<?php include "bottom.php"?>

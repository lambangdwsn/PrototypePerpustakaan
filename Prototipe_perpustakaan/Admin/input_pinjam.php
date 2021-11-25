<?php include "top.php"?>
<div class="input">
		<h1>Peminjaman Perpustakaan</h1>
	<div class="container">
		<form action="" method="post">
			<fieldset>
				<legend>Peminjaman</legend>
				<p>
					<label for="idanggota">ID Anggota : </label>
					<input type="text" name="idanggota" id="idanggota">
				</p>
				<p>
					<label for="idbuku">ID Buku : </label>
					<input type="text" name="idbuku" id="idbuku">
				</p>
				<p>
					<label for="tgl">Tgl Pinjam : </label><br>
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


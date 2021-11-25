<?php
include "top.php";
?>
<div class="input">
	<h1>Input Data Anggota</h1>
	<div class="container">
		<form action="" method="post">
			<fieldset>
				<legend>Input Anggota</legend>
				<p>
					<label for="gambar">Gambar : </label>
					<input type="file" name="idbuku" id="idbuku">
				</p>
				<p>
					<label for="nip">ID Anggota : </label><br>
					<input type="text" name="idbuku" id="nip">
				</p>
				<p>
					<label for="nama">Nama : </label><br>
					<input type="text" name="nama" id="nama">
				</p>
				<p>
					<label for="alamat">Alamat : </label><br>
					<input type="text" name="alamat" id="alamat">
				</p>
			</fieldset>
			<p>
				<input type="submit" name="submit" value="Proses"><br>
			</p>
		</form>
	</div>
</div>
<?php
include "bottom.php";
?>
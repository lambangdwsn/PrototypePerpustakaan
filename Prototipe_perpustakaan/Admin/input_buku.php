<?php
include "top.php";
?>
<div class="input">
	<h1>Input data buku</h1>
	<div class="container">
		<form action="" method="post">
			<fieldset>
				<legend>Input Data</legend>
				<p>
					<label for="gambar">Gambar : </label>
					<input type="file" name="idbuku" id="idbuku">
				</p>
				<p>
					<label for="idbuku">ID Buku : </label><br>
					<input type="text" name="idbuku" id="idbuku">
				</p>
				<p>
					<label for="judul">Judul Buku : </label><br>
					<input type="text" name="idanggota" id="idanggota">
				</p>
				<p>
					<label for="pengarang">Pengarang : </label><br>
					<input type="text" name="pengarang" id="pengarang">
				</p>
				<p>
					<label for="penerbit">Penerbit : </label><br>
					<input type="text" name="penerbit" id="penerbit">
				</p>
			</fieldset>
			<p>
				<input type="submit" name="submit" value="Proses"><br>
			</p>
		</form>
	</div>
</div>
</div>
<?php
include "bottom.php";
?>
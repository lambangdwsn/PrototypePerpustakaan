<html>
<head>
<title>Kritik dan saran Anda</title>
	<style>
		h1 {
			text-align: center;
			color: white;
		}
		.container{
			width: 400px;
			padding: 30px;
			margin: auto;
			background-color: wheat;
			border-radius: 10px;
		}
	</style>
</head>
<body background="https://i0.wp.com/ekawirya.com/wp-content/uploads/2016/11/inaki-del-olmo-NIJuEQw0RKg-unsplash.jpg?resize=825%2C510&ssl=1">
	<h1>Kritik dan saran Anda</h1>
	<div class="container">
		<form action="input.php" method="post">
			<fieldset>
				<legend>Masukkan Saran Anda</legend>
				<p>
					Kepuasan Fasilitas:<br>
					<input type="radio" name="fasilitas" id="TidakPuas" value="Tidak Puas">
					<label for="TidakPuas">Tidak Puas</label><br>
					<input type="radio" name="fasilitas" id="KurangPuas" value="Kurang Puas">
					<label for="KurangPuas">Kurang Puas</label><br>
					<input type="radio" name="fasilitas" id="Puas" value="Puas">
					<label for="Puas">Puas</label><br>
					<input type="radio" name="fasilitas" id="SangatPuas" value="Sangat Puas">
					<label for="SangatPuas">Sangat Puas</label><br>
				</p>
				<p>Kepuasan Pelayanan:<br>
					<input type="radio" name="pelayanan" id="TidakPuas" value="Tidak Puas">
					<label for="TidakPuas">Tidak Puas</label><br>
					<input type="radio" name="pelayanan" id="KurangPuas" value="Kurang Puas">
					<label for="KurangPuas">Kurang Puas</label><br>
					<input type="radio" name="pelayanan" id="Puas" value="Puas">
					<label for="Puas">Puas</label><br>
					<input type="radio" name="pelayanan" id="SangatPuas" value="Sangat Puas">
					<label for="SangatPuas">Sangat Puas</label><br>
				</p>
				<p>
					Request buku:<br><br>
					<label for="judul">Judul : </label><br>
					<input type="text" name="judul" id="judul"><br>
					<label for="judul">Penulis : </label><br>
					<input type="text" name="judul" id="judul"><br>
					<label for="judul">Penerbit : </label><br>
					<input type="text" name="judul" id="judul"><br>
				</p>
			</fieldset>
			<p>
				<input type="submit" name="submit" value="tambah Data">
			</p>
		</form>
	</div>
</body>
</html>


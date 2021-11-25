<?php
include "top.php";
?>

<div class="content">
<div style="background: gray;width: 100%; padding: 40px; border-radius: 5px;">
<a href="input_buku.php" style="background: green;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">Tambah data buku</a>

<a href="#" style="background: green; margin: auto; color: white;padding: 10px; text-decoration: none; border-radius: 5px; float: right"><i class="fa fa-download"></i> Unduh Laporan</a>
</div>
<div class="grid-container">
 <?php
	for($i=0;$i<6;$i++){
		echo
		'
	<div class="grid-item">
  	<img src="../img/default_img.jpg" class="center">
  	<p>Judul Buku : Artikel kesehatan<br>
  	Penulis : Unknown<br>
  	Penerbit : Unkown</p><a href="input_buku.php" style="background: blue;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">edit</a><a href="#contact" style="background: red;padding: 10px; margin: 5px; color: white; text-decoration: none; border-radius: 5px;">hapus</a>
  </div>
		';
	}
	?>
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
</div>
<?php
include "bottom.php";
?>

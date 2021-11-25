<?php
include "top.php";
?>

<div class="content">
<div class="grid-container">
  <div class="grid-item">
  	<img src="../img/default_img.jpg" class="center">
  	<p>Judul Buku : Artikel kesehatan<br>
  	Penulis : Unknown<br>
  	Penerbit : Unkown<br>
  	Tersedia : 8
  	</p>
  	<a href="profile.php">Tambah ke rencana</a>
  </div>
  <div class="grid-item">
  	<img src="../img/default_img.jpg" class="center">
  	<p>Judul Buku : Artikel kesehatan<br>
  	Penulis : Unknown<br>
  	Penerbit : Unkown<br>
  	Tersedia : 10
  	</p>
  	<a href="profile.php">Tambah ke rencana</a>
  </div>
  <div class="grid-item">
  	<img src="../img/default_img.jpg" class="center">
  	<p>Judul Buku : Artikel kesehatan<br>
  	Penulis : Unknown<br>
  	Penerbit : Unkown<br>
  	Tersedia : 1
  	</p>
  	<a href="profile.php">Tambah ke rencana</a>
  </div>
  <div class="grid-item">
  	<img src="../img/default_img.jpg" class="center">
  	<p>Judul Buku : Artikel kesehatan<br>
  	Penulis : Unknown<br>
  	Penerbit : Unkown<br>
  	Tersedia : 19
  	</p>
  	<a href="profile.php">Tambah ke rencana</a>
  </div>
  <div class="grid-item">
  	<img src="../img/default_img.jpg" class="center">
  	<p>Judul Buku : Artikel kesehatan<br>
  	Penulis : Unknown<br>
  	Penerbit : Unkown<br>
  	Tersedia : 10
  	</p>
  	<a href="profile.php">Tambah ke rencana</a>
  </div>
  <div class="grid-item">
  	<img src="../img/default_img.jpg" class="center">
  	<p>Judul Buku : Artikel kesehatan<br>
  	Penulis : Unknown<br>
  	Penerbit : Unkown<br>
  	Tersedia : 10
  	</p>
  	<a href="profile.php">Tambah ke rencana</a>
  </div>
</div>
<div class="page">
<a href="profile.php"> < </a>
<?php
for($i=0;$i<5;$i++){
echo'<a href="profile.php"> '.($i+1).' </a>';
}
?>
 <a href="profile.php"> > </a>
</div>
</div>
<?php
include "bottom.php";
?>

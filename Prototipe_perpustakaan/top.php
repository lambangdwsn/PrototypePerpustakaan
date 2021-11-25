<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="loginstyle.css">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
	background-image: url(img/background.png);
	background-repeat: repeat;
	background-position: center;
}
	h1{
		text-align: center;
		color: black;
	}
.sidebar h1 {
  text-align: center;
  color: white;

}
.page a{
		text-decoration: none;
		color: gray;
		font-weight: bold;
		font-size: 20px;
		padding: 10px;
	}

footer {
display: block;
text-align: center;
padding: 3px;
background-color: green;
color: white;
margin:auto;
width: 99%;
}
.sidebar {
  margin: 0px;
  padding: 0px;
  width: 250px;
  background-color: #333;
  position: fixed;
  height: 100%;
  overflow: hidden;
}

.sidebar a, button {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
	
.search{margin: 16px;}
.search input[type=text]{padding: 5px 0px;}
.search input[type=submit]{padding: 8px; background-color: #4CAF50; color: white; border: none;}
	
div.content {
	margin-left: 300px;
	padding: 1px 16px;
	height: auto;
	width: auto;
	margin-right: 100px;
	margin-top: 20px;
	border-radius: 4px;
}
.grid-container {
display: grid;
grid-gap: 20px 10px;
grid-template-columns: auto auto auto;
padding: 10px;
margin-left: auto;
}

.grid-item {
display: block;
margin: auto;
background-color: rgba(255, 255, 255, 0.8);
border: 1px solid rgba(0, 0, 0, 0.8);
padding: 30px;
height: 200px;
width: 200px;
font-size: 13px;
text-align: left;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
height: 150px; width: 150px;
}
	
.sidebar .icon {
  display: none;
}

@media screen and (max-width: 1100px) {
.grid-container {
grid-template-columns: auto auto;
}

@media screen and (max-width: 900px) {
	.sidebar {
    width: 100%;
    height: auto;
    position: relative;
	}
	.sidebar a {float: left;}
	.search{float: right}
	div.content {margin: 50px 50px 50px 50px;}
	.sidebar .icon {
		display: none;
	}
}

@media screen and (max-width: 700px) {
.grid-container {
grid-template-columns: auto;
}

@media screen and (max-width: 500px) {
div.content {margin: 50px 0px 50px 0px;}
.sidebar a:not(:nth-child(2)), .search {display: none;}
.sidebar a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 500px) {
.sidebar.responsive {position: relative;}
.sidebar.responsive .search{display: block; float: left;}
.sidebar.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .sidebar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .sidebar a.icon {
    float: right;
    display: block;
  }
}
</style>
</head>
<body>

<div class="sidebar" id="mysidebar">
 <h1>Perpustakaan</h1>
  <a class="active" href="utama.php">Home</a>
  <a href="data_buku.php">Koleksi Buku</a>
  <a href="bantuan.php">Bantuan</a>
  <form action="" method="post" class="search">
  <input type="text" placeholder="Cari buku">
  <input type="submit" value="Cari" name="search">
  </form>
  <button onclick="document.getElementById('id01').style.display='block'" class="loginbutton">Login</button>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i></a>
</div><br>
<script>
function myFunction() {
  var x = document.getElementById("mysidebar");
  if (x.className === "sidebar") {
    x.className += " responsive";
  } else {
    x.className = "sidebar";
  }
}
</script>
<div>

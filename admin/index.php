<?php 
include 'header.php';
?>

<?php
$a = mysqli_query($connect, "select * from barang_laku");
?>

<div class="jumbotron text-center" style="margin-bottom:1"
	<p>Selamat datang</p>	
	<button type="button" class="btn btn-primary"><h1><b>TOKO BUKU MBOIS ILAKES</b></h1></button>
	<p>---toko buku terbaik by. arlan and edi---</p>
</div>

<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';
?>
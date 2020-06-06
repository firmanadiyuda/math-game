<?php
	session_start();
	include "koneksi.php";
	include "layout/head.php";
?>

<div class="container" style="max-width: 400px; margin:auto; margin-top: 100px;">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title text-primary" style="text-align: center;">Math Game</h4>
			<hr>

			<?php if (isset($_SESSION["nama"])) { ?>
			<p> Hello <b> <?php echo $_SESSION["nama"]; ?> </b>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik. </p>

			<?php if ($_SESSION["lives"] == 0) { ?>
				<div style="text-align: center;"> Score Anda : <b> <?php echo $_SESSION["score"]; ?> </b> </div>
			<?php } ?>

			<hr class="text-primary"> <br>

			<?php } ?>

			<div style="text-align: center;"> <h5>HALL OF FAME</h5> </div>

			<table border="1" style="border-collapse: collapse;" width="100%">
				<thead class="bg-primary text-light" style="text-align: center;">
					<td><b>No</b></td>
					<td><b>Nama</b></td>
					<td><b>Skor</b></td>
				</thead>

				<?php
					baca_data();
				?>

			</table>

			<br><br>
			<div class="form-group" style="text-align: center;">
				<a href="index.php" style="width: 100%;" class="btn btn-primary">Main Lagi</a>
			</div>	

		</div>
	</div>
</div>

<?php
	include "layout/foot.php";
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;
?>
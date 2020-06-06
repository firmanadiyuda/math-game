<?php
	session_start();
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;

	include "layout/head.php";
?>

<div class="container" style="max-width: 400px; margin:auto; margin-top: 100px;">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title text-primary" style="text-align: center;">Math Game</h4>
			<hr>

			<?php
				if (isset($_SESSION["email"])) {
			?>

			<div style="text-align: center;">
				<p>Hallo <b><?php echo $_SESSION["nama"]; ?></b> , Selamat datang kembali di permainan ini! </p>
				<a href="game.php" class="btn btn-primary" style="text-align: center;">Start Game</a> <br> <br> <br>
				Bukan Anda? <a href="reset.php">klik di sini</a> 
			</div>
			<?php
				} else {
			?>

			<form action="game.php" method="post">
				<div class="form-group" style="margin-right: 33px; ">
					Nama <br>
					<input style="width: 100%;" type="text" class="form-control" name="nama" id="nama" placeholder="Firman Adiyuda" required>
				</div>

				<div class="form-group" style="margin-right: 33px; ">
					Email <br>
					<input style="width: 100%;" type="email" class="form-control" name="email" id="email" placeholder="firman@adiyuda.com" required>
				</div>
				
				<br>
				<div class="form-group" style="text-align: right;">
					<button type="submit" style="width: 100%;" class="btn btn-primary">Mulai</button>
				</div>
			</form>

			<?php
				}
			?>
		</div>
	</div>
</div>

<?php
	include "layout/foot.php";
?>
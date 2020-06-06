<?php    
	session_start();
	include "layout/head.php";
?>

<div class="container" style="max-width: 400px; margin:auto; margin-top: 100px;">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title text-success" style="text-align: center;">Math Game</h4>
			<hr>
			<p>Hello <b><?php echo $_SESSION["nama"]; ?></b>, Selamat jawaban Anda benar.</p>
			<div style="text-align: center;"> Lives: <b> <?php echo $_SESSION["lives"]; ?> </b> | Score: <b> <?php echo $_SESSION["score"]; ?> </b> </div> <br>
			
			<div class="form-group" style="text-align: center;">
				<a href="game.php" style="width: 100%;" class="btn btn-primary">Soal Selanjutnya</a>
			</div>	
		</div>
	</div>
</div>

<?php
	include "layout/foot.php";
?>
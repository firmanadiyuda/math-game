<?php
	session_start();
	include "koneksi.php";

	//	Jika belum pernah memasukkan nama dan email.
	if (!isset($_SESSION["email"])) {
			
		//	Jika form sebelumya belum terisi.
		if (!isset($_POST["nama"])) {
				
			//	Redirect ke index.
			header('Location: index.php');
			
			//	Jika form sebelumnya sudah terisi.
		} else {
			
			//	Mengambil data dari POST dan memasukkan ke dalam session.
			$_SESSION["nama"] = $_POST["nama"];
			$_SESSION["email"] = $_POST["email"];

		}
	}

	//	Jika nyawa habis.
	if ($_SESSION["lives"] == 0) {

		//	Simpan data pemain dan skor ke database
		tambah($_SESSION["nama"], $_SESSION["email"], $_SESSION["score"]);

		//	Pergi ke halloffame.php
		header('Location: halloffame.php');
		
	}

	//	Random bilanganSatu dan bilanganDua.
	$bilanganSatu = rand(0,20);
	$bilanganDua = rand(0,20);

	//	Hasil penjumlahan bilanganSatu dan bilanganDua.
	$hasil = $bilanganSatu + $bilanganDua;

	//	Memasukkan nilai hasil ke session.
	$_SESSION["hasil"] = $hasil;

	//	Import head HTML.
	include "layout/head.php";
?>

<div class="container" style="max-width: 400px; margin:auto; margin-top: 100px;">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title text-primary" style="text-align: center;">Math Game</h4>
			<hr>
			<form action="cekjawaban.php" method="post">	
				<p>Hello <b><?php echo $_SESSION["nama"]; ?></b>, tetap semangat ya… you can do the best!!</p>
				<div style="text-align: center;"> Lives: <b> <?php echo $_SESSION["lives"]; ?> </b> | Score: <b> <?php echo $_SESSION["score"]; ?> </b> </div> <br>
				
				<div class="form-group" style="margin-right: 33px; ">
					Berapakah <b> <?php echo $bilanganSatu; ?> </b> + <b> <?php echo $bilanganDua; ?> </b> ?  <br>
					<input type="number" style="width: 100%" class="form-control" name="hasil" id="hasil" placeholder="Masukkan jawaban" required>
				</div>
			
				<div class="form-group" style="text-align: right;">
					<button type="submit" style="width: 100%;" class="btn btn-primary">Jawab</button>
				</div>				
			</form>
		</div>
	</div>
</div>

<?php
	include "layout/foot.php";
?>
<?php

	session_start();

	if (isset($_SESSION["email"])) {
		
	} else {
		$_SESSION["nama"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}

	if ($_SESSION["lives"] == 0) {
		//	Nyawa abis
		header('Location: gameover.php');
	}

	$bilanganSatu = rand(0,20);
	$bilanganDua = rand(0,20);
	$hasil = $bilanganSatu + $bilanganDua;
	$_SESSION["hasil"] = $hasil;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="cekjawaban.php" method="post">	
		Hello <?php echo $_SESSION["nama"]; ?>, tetap semangat ya… you can do the best!! <br>
		Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?> <br> <br>
		Berapakah <?php echo $bilanganSatu; ?> + <?php echo $bilanganDua; ?> =  <br>
		<input type="number" name="hasil">
		<input type="submit" value="Kirim">
	</form>

</body>
</html>
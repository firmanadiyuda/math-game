<?php

$servername = "localhost";
$username = "root";
$password = "tujubelas";
$dbname = "game";
$table = "math";

//  Koneksi ke database.
$koneksi = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());

//  Fungsi tambah data.
function tambah($nama, $email, $skor){
  $sql = "INSERT INTO math (id, nama, email, score) VALUES(NULL, '".$nama."','".$email."','".$skor."')";
  if (mysqli_query($GLOBALS['koneksi'], $sql)) {
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['koneksi']);
    }
  mysqli_close($GLOBALS['koneksi']);
}

//  Fungsi baca data.
function baca_data() {
  $sql = "SELECT * FROM math ORDER BY score DESC LIMIT 10";
  $result = mysqli_query($GLOBALS['koneksi'], $sql);

  $i = 1;

  while($row = mysqli_fetch_array($result)) {
  
    echo "<tr>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . $row["nama"] . "</td>";
    echo "<td>" . $row["score"] . "</td>";
    echo "</tr>";
    $i = $i + 1;
    
  }

  mysqli_close($GLOBALS['koneksi']);
}

?> 
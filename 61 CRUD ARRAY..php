<?php
$buah = array("apel", "mangga", "pisang");
// atau
$buah = ["apel", "mangga", "pisang"];
$umur = array("Ali" => 20, "Budi" => 25, "Citra" => 22);
echo $buah[0]; // menampilkan "apel"
echo $umur["Ali"]; // menampilkan 20
$buah[0] = "jeruk"; // mengubah nilai elemen pertama menjadi "jeruk"
$umur["Ali"] = 21; // mengubah umur Ali menjadi 21
array_push($buah, "durian"); // menambah "durian" ke dalam array $buah
$umur["Dina"] = 18; // menambah key "Dina" dengan nilai 18 ke dalam array $umur
unset($buah[2]); // menghapus elemen dengan index 2 dari array $buah
unset($umur["Budi"]); // menghapus elemen dengan key "Budi" dari array $umur
unset($buah); // menghapus keseluruhan array $buah
echo "<p><strong>By Fachri</strong>";
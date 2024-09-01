<?php
$films = array(
    array("The Shawshank Redemption", 1994, "Frank Darabont"),
    array("The Godfather", 1972, "Francis Ford Coppola"),
    array("The Dark Knight", 2008, "Christopher Nolan")
);

foreach ($films as $filmDetails) {
    echo "Judul: " . $filmDetails[0] . "<br>";
    echo "Tahun: " . $filmDetails[1] . "<br>";
    echo "Sutradara: " . $filmDetails[2] . "<br><br>";
}
$totalFilms = count($films);
echo "Jumlah film: " . $totalFilms; // Menampilkan jumlah film
echo "<p><strong> By Fachri Rizki</strong>";


<?php
$nama = "Bagus";

$pesan = "selamat datang $nama" ;

echo $pesan;

echo "<hr>";

$namaDepan = "Bagus";
$namaBelakang = "Ananta";

$namaLengkap = $namaDepan . " " . $namaBelakang;

echo $namaLengkap;

echo "<hr>";

$i = 5;

echo "Hasil akhir: " . $i + 3;

echo "<hr>";

$test = "Bagus Fary Ananta";

echo "panjang string/karakter: " . strlen($test);

echo "<hr>";

echo "panjang kata " . str_word_count($test);

echo "<hr>";

echo "<p> " . substr($test, 0, 10);
echo "<p> " . substr($test, 5, 12);

echo "<hr>";

echo "<p> " . strtoupper($test);
echo "<p> " . strtolower($test);

echo "<hr>";

// Tugas mencoba PHP String Function

echo "10 Function PHP tugas";
echo "<hr>";

// chop()
$str = "Bagus Fary Ananta";
echo $str . "<br>";
echo chop($str,"Ananta");

echo "<hr>";

// explode()
$str = "Hello world. It's a beautiful day.";
print_r(explode(" ",$str));

echo "<hr>";

// printf
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);

echo "<hr>";

// strrev()
echo strrev("makan bakso!");

echo "<hr>";

// trim()
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");

echo "<hr>";

// strtok()
$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}

echo "<hr>";

// strlen()
echo strlen("Hello");

echo "<hr>";

// substr()
echo substr("Hello world",6);

echo "<hr>";

// str_repeat()
echo str_repeat("Wow",13);

echo "<hr>";

// str_shuffle()
echo str_shuffle("Hello World");


?>
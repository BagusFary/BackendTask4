<?php
// Tugas mencoba PHP String Function

echo "10 Function PHP tugas";
echo "<hr>";

// chop()
// menghilangkan karakter dari sebuah string
$str = "Bagus Fary Ananta";
echo $str . "<br>";
echo chop($str,"Ananta");

echo "<hr>";

// explode()
// mengubah suatu string menjadi array
$str = "Hello world. It's a beautiful day.";
print_r(explode(" ",$str));

echo "<hr>";

// printf
// memformat teks atau string
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);

echo "<hr>";

// strrev()
// membalikkan suati string
echo strrev("makan bakso!");

echo "<hr>";

// trim()
// menghilangkan karakter dari sebuah string hampir mirip dengan chop
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");

echo "<hr>";

// strtok()
// membagi string menjadi string yang lebih kecil
$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}

echo "<hr>";

// strlen()
// mengembalikan panjang suatu karakter string
echo strlen("Hello");

echo "<hr>";

// substr()
// mengembalikan suatu string dengan index input yang diisikan
echo substr("Hello world",6);

echo "<hr>";

// str_repeat()
// mengulangi string yang di inputkan
echo str_repeat("Wow",13);

echo "<hr>";

// str_shuffle()
// mengacak karakter string
echo str_shuffle("Hello World");


?>

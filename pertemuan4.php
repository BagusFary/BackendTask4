<?php
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

<?php

echo "<h2>Tugas Rekayasa WEB</h2>";
// 1. Buatlah sebuah variable array, lalu encode ke format JSON

$data = [
    "nama" => "Syahrul Husain F",
    "umur" => 21,
    "hobi" => ["Olahraga", "Traveling", "coding"]
];

$jsonData = json_encode($data);

echo "1. Hasil JSON Encode:<br>";
echo $jsonData;

// 2. Buat sebuah variable yang berisi JSON, lalu decode ke dalam bentuk PHP object dan array, kemudian akses nilainya

$jsonString = '{"nama":"Syahrul","umur":21,"hobi":["musik","gaming","olahraga"]}';

// Decode ke PHP Object
$obj = json_decode($jsonString);

// Decode ke PHP Array
$arr = json_decode($jsonString, true);

echo "<br><br>2. Hasil JSON Decode:<br>";

// Akses data dari Object
echo "Decode ke Object<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi Pertama: " . $obj->hobi[0] . "<br><br>";

// Akses data dari Array
echo "Decode ke Array<br>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "Umur: " . $arr["umur"] . "<br>";
echo "Hobi Kedua: " . $arr["hobi"][2] . "<br>";
?>

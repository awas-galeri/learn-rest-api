<?php


// $siswa = [
//     [
//         "nama" => 'Sano',
//         "nip" => "012345678",
//         "email" => "sano@gmail.com"
//     ],
//     [
//         "nama" => 'Sano',
//         "nip" => "012345678",
//         "email" => "sano@gmail.com"
//     ]
// ];


$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM siswa');
$db->execute();
$siswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($siswa);
echo $data;

<?php 
//prendi la stringa json
$disc_content = file_get_contents("dischi.json");
//trasformi la stringa json in array
$array_disk = json_decode($disc_content, true);
var_dump($array_disk);

// $response = [
//     "results" => $todos_array,
//     "success" => true
// ];
// header('Content-Type: application/json');
// echo json_encode($response);

$result = [
    "data" => $array_disk,
];
var_dump($result);
header('Content-Type: application/json');
echo json_encode($result);
?>
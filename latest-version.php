<?php

$latestVersion = "7";

// JSON yanıtı oluşturun
$response = array(
    'version' => $latestVersion
);

header('Content-Type: application/json');
echo json_encode($response);
?>
<?php

$dataContent = json_decode(file_get_contents('./data.json'));
$displayContent = json_decode(file_get_contents('./display.json'));

$data = (object) array_merge((array) $dataContent, (array) $displayContent);


header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Content-Type: application/json');
echo json_encode($data);


?>

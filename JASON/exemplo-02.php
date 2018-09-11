<?php 


$json = '[{"nome":"Raniere","idade":37},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json);

var_dump($data);
 ?>
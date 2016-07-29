<?php 



$datestart = strtotime('2016-07-25');//you can change it to your timestamp;

$cur = date('Y-m-d');//you can change it to your timestamp;
$dateend = strtotime($cur);

$daystep = 86400;

$datebetween = abs(($dateend - $datestart) / $daystep);

$randomday = rand(0, $datebetween);


echo date("mdY", $datestart + ($randomday * $daystep)) . "\n";




?>
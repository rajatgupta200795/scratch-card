<?php

$data = @$_GET['data'];

$data = $data."\n";

$paytmUserFile = fopen("paytmUserFile.txt", "a+");
$txt = $data;
//fwrite($paytmUserFile, $txt);
//$txt = $data;
fwrite($paytmUserFile, $txt);
fclose($paytmUserFile);


?>

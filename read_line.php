<?php
// CSVファイルを開く(読み込みはｒ)
$file = fopen("data.csv","r");

//カウント用
$totalRows = 0;
$okRows = 0;

while (($data = fgetcsv($file)) !== FALSE) {
    $totalRows++;

    if(isset($data[6]) && $data[7] == 1) {
        $okRows++;
    }
}

fclose($file);

$rate = $okRows / $totalRows * 100;

$output = $rate."%";

echo $output;
<?php
// CSVファイルを開く
$file = fopen("data.csv", "r");

// HTMLテーブルの開始
echo "<table border='1'>";

// テーブルのヘッダー
echo "<tr><th>名前</th><th>生年月日</th><th>動詞が使える</th><th>具体物の名前が言える</th><th>1から10まで数えられる</th><th>粘土遊び</th><th>挨拶できる</th><th>順番を待てる</th><th>大人の真似をする</th></tr>";

// CSVの各行を読み込み、HTMLテーブルの行に変換
while (($data = fgetcsv($file)) !== FALSE) {
    echo "<tr>";
    foreach ($data as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

// ファイルを閉じる
fclose($file);
?>

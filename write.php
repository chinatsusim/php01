<?php 
    $name = $_POST["name"];
    $birthdate = $_POST["birthdate"];

    // チェックボックスの値を配列で受け取る
    $capabilities = isset($_POST['capabilities']) ? $_POST['capabilities'] : array();

    // 各能力項目のチェック状態を確認（チェックされていれば1、されていなければ0）
    $eatPlayGive = in_array("eat-play-give", $capabilities) ? 1 : 0;
    $nameObjects = in_array("name-objects", $capabilities) ? 1 : 0;
    $countToTen = in_array("count-to-ten", $capabilities) ? 1 : 0;
    $playWithClay = in_array("play-with-clay", $capabilities) ? 1 : 0;
    $sayHelloGoodbyeLoudly = in_array("say-hello-goodbye-loudly", $capabilities) ? 1 : 0;
    $canWaitTurn = in_array("can-wait-turn", $capabilities) ? 1 : 0;
    $imitateAdults = in_array("imitate-adults", $capabilities) ? 1 : 0;

    $c = ",";

    // CSVに出力する文字列を組み立て
    $str = $name.$c.$birthdate.$c.$eatPlayGive.$c.$nameObjects.$c.$countToTen.$c.
           $playWithClay.$c.$sayHelloGoodbyeLoudly.$c.$canWaitTurn.$c.$imitateAdults;

    $file = fopen("data.csv","a");
    fwrite($file, $str."\n");
    fclose($file);

    header("Location: index.php"); // リダイレクト
    exit;
?>

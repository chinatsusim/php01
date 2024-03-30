<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>送信画面</title>
    
</head>
<body>
    <header>
        <h1>管理画面</h1>
    </header>
    
    <main>

    <form action="write.php" method="post" class="form">
    <h2>ユーザー登録</h2>
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="birthdate">生年月日</label>
            <input type="date" id="birthdate" name="birthdate">
        </div>
        <div class="form-group capabilities">
            <label>できることにチェックしてください。</label>
            <div>
            <input type="checkbox" id="eat-play-give" name="capabilities[]" value="eat-play-give">
            <label class="choice" for="eat-play-give">たべる、あそぶ、あげる、など動詞を使って話す</label>
            </div>
            <div>
            <input type="checkbox" id="name-objects" name="capabilities[]" value="name-objects">
            <label class="choice" for="name-objects">くるま、いちご、おかし、など具体物の名前が言える</label>
            </div>
            <div>
            <input type="checkbox" id="count-to-ten" name="capabilities[]" value="count-to-ten">
            <label class="choice" for="count-to-ten">１から１０までの数の名前を正しい順番で言える</label>
            </div>
            <div>
            <input type="checkbox" id="play-with-clay" name="capabilities[]" value="play-with-clay">
            <label class="choice" for="play-with-clay">粘土遊びや泥団子づくりに夢中になる</label>
            </div>
            <div>
            <input type="checkbox" id="say-hello-goodbye-loudly" name="capabilities[]" value="say-hello-goodbye-loudly">
            <label class="choice" for="say-hello-goodbye-loudly">こんにちは、さようなら、など挨拶を大きな声で言える</label>
            </div>
            <div>
            <input type="checkbox" id="can-wait-turn" name="capabilities[]" value="can-wait-turn">
            <label class="choice" for="can-wait-turn">順番を待つことができる</label>
            </div>
            <div>
            <input type="checkbox" id="imitate-adults" name="capabilities[]" value="imitate-adults">
            <label class="choice" for="imitate-adults">大人の口癖を真似したり、動作を真似したりする</label>
            </div>


        </div>
        <button type="submit">送信</button>
    </form>
        <h2>登録ユーザー一覧</h2>
        <?php include 'read.php'; ?>

    </main>

    <footer>
    © 2024 NEM
    </footer>

</body>
</html>


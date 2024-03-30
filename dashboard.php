<!-- Dash Borad -->
<div id="dashboard">
    <h2>Dashboard</h2>
    <p class="msg">こんにちは。本日もおつかれさまです。</p>
    <div class="totalling">
        <div class="rate">
            <div class="item">あいさつ達成率</div>
            <div class="num"><?php include 'read_hello.php'; ?></div>
        </div>
        <div class="rate">
            <div class="item">順番待ち達成率</div>
            <div class="num"><?php include 'read_line.php'; ?></div>
        </div>
        <div class="rate">
            <div class="item">カウントアップ達成率</div>
            <div class="num"><?php include 'read_count.php'; ?></div>
        </div>
    </div>

    <div class="advice">
    <div class="adviceTitle">ご提案</div>
    今月は、楽しく数字に親しめる活動を取り入れてみませんか？<br>
    おすすめの楽曲を紹介します。<br>
    ・すうじのうた
    </div>
    <?php include 'read.php'; ?>
</div>

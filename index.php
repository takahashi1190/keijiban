<!doctype html>
<html lang= "ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
    <img src="4eachblog_logo.jpg">
    <div class="navi">
    <ul>
        <li>トップ</li>
        <li>プロフィールについて</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </div>
</header>
<body>
<main>
  <div class="main-content">
    <div class="left-content">
        <h2>プログラミングに役立つ掲示板</h2>
    <form method="post" action="insert.php">
        <div>
        <p class="enter">入力フォーム</p>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>
        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>
        <div>
            <label>コメント</label>
            <br>
            <textarea col="270" row="40" name="comments"></textarea>
        </div>
        <div>
            <input type="submit" class="submit" value="投稿する">
        </div>
</form>
        <div class= "bottom-content">
<?php
    $dbh = new PDO("mysql:host=127.0.0.1; dbname=lesson01; charset=utf8", 'root', 'rootroot');
    $stmt = $dbh->query("select * from 4each_keijiban");

    while ($row = $stmt->fetch()){
        echo "<div class='kiji' >";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents' >";
        echo $row['comments'];
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
        </div>
</div>
    <div class="right-content">
    <ul>
        <h2>人気の記事</h2>
        <li>PHPおすすめ</li>
        <li>PHP MyAdminの使い方</li>
        <li>今人気のエディタ　Top5</li>
        <li>HTMLの基礎</li>
        <h2>オススメリンク</h2>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Bracketsのダウンロード</li>
        <h2>カテゴリ</h2>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
    </ul>
    </div>
</div>
    </main>
    
<footer>
    <p>Copyright © internous | 4each blog the which provides A to Z about programming.</p>
</footer>
</body>
</html>
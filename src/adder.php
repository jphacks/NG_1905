<!--入力ページ-->
<?php
  require_once("data.php");
?>
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Adder</title>
  <link rel="stylesheet" href="adder.css">
</head>
<body>
  <!--ヘッダー-->
  <div class="adder-page">
    <div class="head">
      <h1>WEB_NAME</h1>
    </div>
    <div class="form">
    <!--基本情報-->
    <form action="http://masacccch.php.xdomain.jp/confirm.php" name="f" onsubmit="return selcheck()" method="POST">
      <dl>
        <dt>
          <span class="required name-head">名前</span>
        </dt>
        <div class="name-form">
          <dd>
            <input type="text" name="name" class="name" required>
          </dd>
        </div>
        <dt>
          <span class="required email-head">メールアドレス</span>
        </dt>
        <dd>
          <input type="email" name="email" class="email" required>
        </dd>
        <dt>
          <span class="tel-head">電話番号</span>
        </dt>
        <dd><input type="tel" name="tel" class="tel"></dd>
        <dt>メモ</dt>
        <dd>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </dd>
      </dl>
      <input type="submit">
    </form>
        </div>
        <div class="attention">
          <p>※「<span class="required"></span>」のついている項目は必須項目です。</p>
        </div>
      </div><!--form-->
    </div>
    <!--趣味のパネルを置く場所-->
    <div class="hobby-box">
      
    </div>
    <div class="hobby-submitbox">

    </div>
  </div>
  <!--JavaScripyのインポート-->
  <script src="tools.js"></script>
</body>
</html>
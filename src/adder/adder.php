<!--入力ページ-->
<?php
  require_once("../data.php");
?>
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title>Adder</title>
  <link rel="stylesheet" href="adder.css">
  <script src="tools.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body>
  <!--ヘッダー-->
  <div class="adder-page">
    <div class="head">
      <h1>WEB_NAME</h1>
    </div>
    <div class="title">
      <h2>入力フォーム</h2>
    </div>
    <div class="form">
    <div class="form-base">
      <!--基本情報-->
      <form action="http://masacccch.php.xdomain.jp/confirm.php" name="f" onsubmit="return selcheck()" method="POST">
        <dl>
          <dt>
            <span class="required name-head">名前</span>
          </dt>
          <div class="name-form"></div>
          <dd>
            <input type="text" name="name" class="name" required>
          </dd>
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
      <div class="attention">
        <p>※「<span class="required"></span>」のついている項目は必須項目です。</p>
      </div>
    </div><!--form-base-->
    <!--趣味のパネルを置く場所-->
    <div class="hobby-box">
    <!--趣味パネルを設定-->
      <?php foreach($hobbies as $hobby) : ?>
        <div class=<?php echo $hobby?> id="hobby">
          <p><?php echo $hobby?></p>
          <script>drag("<?php echo $hobby?>")</script>
        </div>
      <?php endforeach ?>
    </div>
    <div class="hobby-submitbox">
      <script>drop();</script>
      <h3>ここにパネルを置いてください</h3>
    </div>
    <div class="hobby-shows">
      <ul>
      <?php foreach($hobbies as $hobby) : ?>
      <div class="<?php echo $hobby?>">
        <li></li>
      </div>
      <?php endforeach ?>
      </ul>
    </div>
  </div><!--form-->
  </div>
<div class="gotoMain">
  <a href="../Main/main.php">メインページへ</a>
</div>
</body>
</html>
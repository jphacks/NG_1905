</body>
</html>
<!--入力ページ-->
<?php
  require_once("../data.php");
?>
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Adder</title>
  <link rel="stylesheet" href="adder.css">
  <link rel="stylesheet" href="../../header.css">
  <script src="tools.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <?php 
  if (!isset($_POST['userid'])){
    $userid = "testid" ;
  }else{
    $userid= $_POST["userid"] ; 
  }
  
  ?>
</head>
<body>
  <!--ヘッダー-->
  <div class="adder-page">
    <div class="head">
      <script>a();</script>
      <h1 class="headC">べんりなれんらくちょう</h1>
    </div>
    <div class="headContainer">
    <div class="title">
      <h2>入力フォーム</h2>
    </div>
    </div>
    <div class="container">
    <div class="form">
    <div class="form-base">
    <h2>基本情報</h2>
      <!--基本情報-->
      <form action="adderC.php" name="f" onsubmit="return selcheck()" method="POST" class="form-group">
      <input type="text" name="userid" hidden class="userid form-control" value="<?php echo $userid ?>">
        <dl>
          <dt>
            <span class="required name-head">名前</span>
          </dt>
          <div class="name-form"></div>
          <dd>
            <input type="text" name="name" class="name form-control" required>
          </dd>
          <dt>
            <span class="required home-head">出身地</span>
          </dt>
          <dd>
            <input type="text" name="home" class="home form-control" required>
          </dd>
          <dt>
            <span class="tel-head">電話番号</span>
          </dt>
          <dd><input type="tel" name="tel" class="tel form-control"></dd>
          <dt>メモ</dt>
          <dd>
          <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
          </dd>
          <dt>
            <span class="tel-head">趣味</span>
          </dt>
          <dd><input type="text" name="hobby" id="setHobby" class="hobby form-control" readonly value="set from Right"></dd>
        </dl>
        <input type="submit" class="form-control">
      </form>
      <div class="attention">
        <p>※「<span class="required"></span>」のついている項目は必須項目です。</p>
      </div>
    </div><!--form-base-->
    <div class="hobby-shows">
      <h3>趣味</h3>
      <p>ここにドロップ</p>
      <script>drop();</script>
      <?php foreach($hobbies as $hobby) : ?>
      <div class="<?php echo $hobby?>-a"></div>
      <?php endforeach ?>
      <ul id="uls">
      </ul>
      <br><br>
      <div>
      <input type="button" value="この内容でセットする" onclick="setHobby()">
</div>
      
    </div>
    <!--趣味のパネルを置く場所-->
    <div class="hobby-box">
    <!--趣味パネルを設定-->
    <?php $i = 0 ?>
      <?php foreach($hobbies as $hobby) : ?>
        <div class="<?php echo $hobby?>"  id="hobby">
          <p><?php echo $hobby?></p>
          <script>drag("<?php echo $hobby?>")</script>
          <?php if($i % 4 == 3) : ?>
            <div class="floatClear"></div>
          <?php endif ?>
        </div>
        <?php $i++; ?>
      <?php endforeach ?>
    </div>
  </div><!--form-->
  </div>
  </div>
<div class="gotoMain">
<?php echo "<form method=\"post\" name=\"toM\" action=\"../Main/main.php\"><input type=\"text\" name=\"userid\" hidden value=\"".$userid."\"><input type=\"submit\" value=\"メインページへ\"></form>" ;   ?> 
</div>
</body>
</html>
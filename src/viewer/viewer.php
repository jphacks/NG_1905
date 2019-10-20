<!DOCTYPE html>
<html lang="jp">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="../../header.css">
		<link rel="stylesheet" href="viewer.css">
		<script src="viewer.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		<title>Viewer</title>
		<?php 
  if (!isset($_GET['userid'])){
    $userid = "testid" ;
    $targetname = "NameSSS";
  }else{
    $userid= $_GET["userid"] ;
    $targetname = $_GET["targetname"];
  }
  $handle2;
  if (($handle = fopen("../../DATABASE/ID.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle))) {
      if($data[0] == $userid){
          $userhobby = array();
          for($i = 0; $i < count($data) - 3; $i++){
            $userhobby[] = data[$i + 4];
          }
          if (($handle2 = fopen("../../DATABASE/DATA.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle2))) {
              if($data[1] == $targetname){
                $targethome = $data[2];
                $targettel = $data[3];
                $targetmessage = $data[4];
                $targethobby = array();
                for($i = 0; $i < count($data) - 5; $i++){
                  $targethobby[] = $data[$i + 5];
                }
              }
            }
          }
          break ;
      }
    }
    fclose($handle);
    fclose($handle2);
}
?>
	</head>
	<body>
		<div class="head">
			<script>a();</script>
			<h1 class="headC">WEB_NAME</h1>
		</div>
		<div class="title-container">
			<div class="title">
				<h1>Viewer</h1>
			</div>
		</div>
		<div class="container">
			<div class="base-viewer">
				<!--基本情報+趣味を表示-->
				<h2 class = "name">名前</h2>
				<p>
					<?php echo $targetname?>
				</p>
				<h2 class = "tel">出身地</h2>
				<p>
					<?php echo $targethome?>
				</p>
				<h2 class = "tel">電話番号</h2>
				<p>
					<?php echo $targettel?>
				</p>
				<h2 class = "tel">メモ</h2>
				<p>
					<?php echo $targetmessage?>
				</p>
				<h2 class = hobby>趣味</h2>
				<p>
					<?php 
      foreach($targethobby as $hobby){
        echo "$hobby ";
      }
    ?>
				</p>
			</div>
			<div class="hobby-container">
				<div class="selectform">
					<h3>自分の趣味と相手の趣味からGoogle検索できます</h3>
					<form action="" name="f" method="POST">
						<dl>
							<dt>あなたの趣味</dt>
							<dd>
								<!--ユーザーの趣味情報を選択できるようにする-->
                <?php foreach($userhobby as $hobby) :?>
                  <input type="radio"><?php echo "$hobby"?>
                <?php endforeach?>
                <?php if(sizeof($userhobby) == 0) : ?>
                  <p>登録されていません</p>
                <?php endif?>
							</dd>
							<dt>〇〇さんの趣味</dt>
							<dd>
								<!--viewerに登録された人の趣味情報を選択できるようにする-->
                <?php foreach($targethobby as $hobby) :?>
                  <input type="radio"><?php echo "$hobby"?>
                <?php endforeach?>
                <?php if(sizeof($targethobby) == 0) : ?>
                  <p>登録されていません</p>
                <?php endif?>
							</dd>
						</dl>
					</form>
				</div>
				<div class="web">
					<form action="http://www.google.co.jp/search" method="get" target="_blank">
						<input type="hidden" name="q" value="">
						<!--valueで検索結果を変えられる-->
						<input type="submit" name="btng" value="検索">
						<input type="hidden" name="hl" value="ja">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
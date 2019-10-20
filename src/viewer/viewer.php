<!DOCTYPE html>
<html lang="jp">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="../../header.css">
		<link rel="stylesheet" href="viewer.css">
		<script src="viewer.js"></script>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		<title>Viewer</title>
		<?php 
  if (!isset($_GET['userid'])){
    $userid = "testid" ;
    $targetname = "test1";
  }else{
    $userid= $_GET["userid"] ;
    $targetname = $_GET["targetname"];
  }
  $handle2;
  if (($handle = fopen("../../DATABASE/ID.csv", "r+")) !== FALSE) {
    while (($data = fgetcsv($handle))) {
      if($data[0] == $userid){
          $userhobby = array();
          for($i = 0; $i < count($data) - 4; $i++){
            $userhobby[] = $data[$i + 4];
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
					fclose($handle2);
          break ;
      }
    }
    fclose($handle);
}
$matchhobby = [] ;
foreach($userhobby as $uval){
	foreach($targethobby as $tval){
		if($uval == $tval){
			$matchhobby[] = $uval ;
		}
	}
}

$targethobbycopy = array_diff($targethobby,$matchhobby);
$targethobbycopy = array_values($targethobbycopy);

?>
	</head>
	<body>
		<div class="head">
			<script>a();</script>
			<h1 class="headC">べんりなれんらくちょう</h1>
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
				<p><p class="match">
					<?php 
      				foreach($matchhobby as $hobby){
        			echo "$hobby ";
      				}	
					?>
					<?php if(!empty($matchhobby)){
						echo "<span class=\"badge\">一致！</span>" ;
					} ?>
					</p>
					<?php 
      				foreach($targethobbycopy as $hobby){
        			echo "$hobby ";
      				}	
    				?>
				</p>
			</div>
			<div class="hobby-container">
				<div class="selectform">
					<h3>自分の趣味と相手の趣味からGoogle検索できます</h3>
					<form action="" id="f" name="f" class="f" method="POST">
						<dl>
							<dt>あなたの趣味</dt>
							<dd>
								<!--ユーザーの趣味情報を選択できるようにする-->
                <?php foreach($userhobby as $hobby) :?>
                  <input type="radio" class="radio1" name="radio1" value=<?php echo $hobby?> onclick="selcheck()"><?php echo $hobby?>
                <?php endforeach?>
                <?php if(sizeof($userhobby) == 0) : ?>
                  <p>登録されていません</p>
                <?php endif?>
							</dd>
							<dt>〇〇さんの趣味</dt>
							<dd>
								<!--viewerに登録された人の趣味情報を選択できるようにする-->
                <?php foreach($targethobby as $hobby) :?>
                  <input type="radio" class="radio2" name="radio2" value=<?php echo $hobby?> onclick="selcheck2()"><?php echo $hobby?>
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
						<input type="hidden" name="q" id="q" value="">
						<!--valueで検索結果を変えられる-->
						<input type="submit" name="btng" value="検索">
						<input type="hidden" name="hl" value="ja">
					</form>
				</div>
			</div>
		</div>
		<?php echo "<form method=\"post\" name=\"toM\" action=\"../Main/main.php\"><input type=\"text\" name=\"userid\" hidden value=\"".$userid."\"><input type=\"submit\" value=\"メインページへ\"></form>" ;   ?> 

	</body>
</html>
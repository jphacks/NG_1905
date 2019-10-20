<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../header.css">
  <script src="viewer.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <title>Viewer</title>
</head>
<body>
<div class="head">
  <script>a();</script>
  <h1 class="headC">WEB_NAME</h1>
</div>
<div class="container">
  <div class="base-viewer">
    <!--基本情報+趣味を表示-->
    <h2 class = "name">名前</h2>
    <h2 class = "tel">出身地</h2>
    <h2 class = "tel">電話番号</h2>
    <h2 class = hobby>趣味</h2>
  </div>
  <div class="selectform">
    <form action="" name="f" method="POST">
      <dl>
        <dt>あなたの趣味</dt>
        <dd>
          <!--ユーザーの趣味情報を選択できるようにする-->
          <select name="type1" id="type1">
            <option value="select">選択してください</option>
          </select>
        </dd>
        <dt>〇〇さんの趣味</dt>
        <dd>
          <!--viewerに登録された人の趣味情報を選択できるようにする-->
          <select name="type2" id="type2">
            <option value="select">選択してください</option>
          </select>
        </dd>
      </dl>
    </form>
  </div>
  <div class="web">
    <h3>自分の趣味と相手の趣味からGoogle検索できます</h3>
    <form action="http://www.google.co.jp/search" method="get" target="_blank">
      <input type="hidden" name="q" value=""><!--valueで検索結果を変えられる-->
      <input type="submit" name="btng" value="検索">
      <input type="hidden" name="hl" value="ja">
    </form>
  </div>
</div>
</body>
</html>

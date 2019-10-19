<!DOCTYPE html>
<html lang="ja">
<head>
    <title>登録確認</title>
</head>
<body>
<?php
        $pData = array(
        $_POST["id"] ,
        $_POST["password"] ,
        $_POST["username"] ,
        )
        ?>
<?php
        $fp = fopen("../../DATABASE/ID.csv", "a");

        fputcsv($fp, $pData);

        fclose($fp);
        echo "<p>登録されました。</p>" ;

        ?>


<div class="form-confirm">
    <h1>登録情報</h1>
    <div class="name-confirm">
        <h3>Your ID</h3>
        <?php echo $_POST["id"]; ?>
    </div>
    <div class="password-confirm">
        <h3>Your PASSWORD</h3>
        ********
    </div>
    <div class="name-confirm">
        <h3>Your ID</h3>
        <h2><?php echo $_POST["username"]; ?></h2>
    </div>


    <div class="Cwrite">
        <p>こちらの内容で書き込みました。</p>
        <?php print_r($pData) ?>
        <form action="main.php" method="post">
                    <p>Your   I  D   :<input type="text" name="id"></p>
                    <input type="submit" value="メインページへ">
                </form>
        <p><a href="../main.html">トップへ</a></p>
    </div>

</div>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>登録確認</title>
</head>
<body>
<?php
        $pData = array(
        $_POST["userid"] ,
        $_POST["password"] ,
        $_POST["username"] ,
        1
        ) ;
        
    $hobby=$_POST["hobby"] ;

    $hobbyR = explode(',', $hobby);

    foreach($hobbyR as  $value){
         $pData[] = $value ;
    }



        $fp = fopen("../../DATABASE/ID.csv", "a");

        fputcsv($fp, $pData);

        fclose($fp);
        echo "<p>登録されました。</p>" ;

        ?>


<div class="form-confirm">
    <h1>登録情報</h1>
    <div class="name-confirm">
        <h3>Your ID</h3>
        <?php echo $_POST["userid"]; ?>
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
        <!-- <?php print_r($pData) ?> -->
        <form action="../Main/main.php" method="post">
            <p><input type="text" name="userid" hidden value="<?php echo $pData[0] ?>"></p>
            <input type="submit" value="メインページへ">
        </form>
    </div>

</div>
</body>
</html>
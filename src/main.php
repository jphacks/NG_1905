<!DOCTYPE html>
<html lang="ja">
<head>
    <title>メインページ</title>
</head>
<body>
ああああああああああああああああああああ
    <?php $userid= $_POST["id"] ;
        $row = 1;
        if (($handle = fopen("Dcsv.csv", "r")) !== FALSE) {
            // 1行ずつfgetcsv()関数を使って読み込む
            while (($data = fgetcsv($handle))) {
                $row++;
                if($data[0] == $userid){
                    $username = $data[1] ;
                    echo "Ditechted" ;
                    break ;
                }
                echo "Not Detected" ;
            }
            fclose($handle);
        }
    ?>
<div class="hello">
    <h1>ようこそ<?php echo $username ?>さん,ID=<?php echo $userid ?></h1>

</div>
</body>
</html>
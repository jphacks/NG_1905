<!DOCTYPE html>
<html lang="ja">
<head>
    <title>メインページ</title>
</head>
<body>
ああああああああああああああああああああ
    <?php $userid= $_POST["id"] ;
    echo "もらったでーた".$userid ;
        $row = 1;
        if (($handle = fopen("../DATABASE/ID.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle))) {
                $row++;
                foreach ($data as $value) {
                    echo "「${value}」";
                }
                echo "<br>" ;
                if($data[0] == $userid){
                    echo "D0=".$data[0]." ID== ".$userid ; 
                    $username = $data[2] ;
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
    <a href="../index.html">go to INDEX </a>

</div>


</body>
</html>
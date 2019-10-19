<!DOCTYPE html>
<html lang="ja">
<head>
    <title>メインページ</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="main.js"></script>
    <div class="header">
        <div class="headsC">Welcome</div>
    </div>
</head>
<body>
    <?php $userid= $_POST["id"] ;
        $row = 1;
        if (($handle = fopen("../../DATABASE/ID.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle))) {
                $row++;
                foreach ($data as $value) {
                }
                if($data[0] == $userid){
                    $username = $data[2] ;
                    break ;
                }
            }
            fclose($handle);
        }
    ?>
<div class="hello">
    <h1>ようこそ<?php echo $username ?>さん,ID=<?php echo $userid ?></h1>
    <a href="../../index.html">go to INDEX </a>
</div>

    <div class="container">
        <div class="Right">
            <p>こっち右側</p>
        </div>

        <div class="Left">こっち左側
            <br>
        </div>
    </div>


</body>
</html>
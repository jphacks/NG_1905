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
            <div class="downfield">
                <?php
                if (($handle = fopen("../../DATABASE/DATA.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle))) {
                        if($data[0] == $userid){
                            echo "<div class=\"dfield\"> " ;
                            echo "<a href=\"../viewer/viewer.php?userid=".$userid."&targetname=".$data[1]."\">".$data[1]."</a> " ;

                        }
                        echo "<br>" ;
                    }
                fclose($handle);
                }
                ?>
            </div>
                


        </div>
    </div>


</body>
</html>
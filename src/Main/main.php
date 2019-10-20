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
    <?php $userid= $_POST["userid"] ;
        $row = 1;
        if (($handle = fopen("../../DATABASE/ID.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle))) {
                $row++;
                foreach ($data as $value) {
                }
                if($data[0] == $userid){
                    $username = $data[2] ;
                    $userlevel = $data[3] ;
                    break ;
                }
            }
            fclose($handle);
        }
    ?>

<div class="hello">
    <h3>ようこそ<?php echo $username ?>さん,ID=<?php echo $userid ?></h3>

</div>

    <div class="container">
        <div class="Right">
            <p>こっち右側</p>
            <br>
            <?php echo "<form method=\"post\" name=\"toAdd\" action=\"../adder/adder.php\"><input type=\"text\" name=\"userid\" hidden value=\"".$userid."\"><input class=\"button\" type=\"submit\" value=\"登録画面はこちらっ\"></form>" ;   ?> 
            <br>

            <div class="status">
                <h2>Your Status</h2>
                <h3>ID: <?php echo $userid ?></h3>
                <h3>Level: <?php echo $userlevel ?></h3>
            </div>
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
                            echo "</div>" ;
                        }
                        echo "<br>" ;
                    }
                fclose($handle);
                }
                ?>
            </div>
                


        </div>
    </div>
    <a href="../../index.html">go to INDEX </a>

</body>
</html>
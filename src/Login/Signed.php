<!DOCTYPE html>
<html lang="ja">
<head>
    <title>ログインに成功してでしょうか</title>
</head>
<body>
    <?php 
    $userid= $_POST["userid"] ;
    $userpassword = $_POST["password"] ;

        // echo "もらったでーた".$userid." &  ".$userpassword ;
        if (($handle = fopen("../../DATABASE/ID.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle))) {
                foreach ($data as $value) {
                    // echo "「${value}」";
                }
                // echo "<br>" ;
                if($data[0] == $userid){
                    if($data[1] == $userpassword){
                        echo "SUCCSEESS"  ;
                        
                        echo "<form name=\"IDPW\" action=\"../Main/main.php\" method=\"post\">\" " ;
                            echo "<input type=\"text\" name=\"userid\" hidden value=\"".$userid."\">" ;
                        echo "</form>" ;
                        echo "<script>" ;
                            echo "document.IDPW.submit();" ;
                        echo "</script>" ;
                    }
                    break ;
                } 
            }
            fclose($handle);
            
                echo "<h1>Not Detected</h1>" ;
                echo "<h3>ID または Passwordが違います。<br>もう一度やり直してください</h3>" ;
                echo "<a href=\"../../index.html\">タイトルページへ</a>" ;   
        }
        ?>

</div>
</body>
</html>
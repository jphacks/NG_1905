<!DOCTYPE html>
<html lang="ja">
<head>
    <title>ログインに成功してでしょうか</title>
</head>
<body>
    <?php 
    $userid= $_POST["id"] ;
    $userpassword = $_POST["password"] ;

        echo "もらったでーた".$userid." &  ".$userpassword ;
        if (($handle = fopen("../DATABASE/ID.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle))) {
                $row++;
                foreach ($data as $value) {
                    echo "「${value}」";
                }
                echo "<br>" ;
                if($data[0] == $userid){
                    if($data[1] == $userpassword){
                        echo "SUCCSEESS"  ;
                    }
                    break ;
                }
                echo "Not Detected" ;
            }
            fclose($handle);
        }
        ?>

</div>
</body>
</html>
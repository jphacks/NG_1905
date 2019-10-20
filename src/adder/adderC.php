<!DOCTYPE html>
<html lang="ja">
<head>
    <title>書き込みできましたかねえ</title>
</head>
<body>
    <?php 
    $userid= $_POST["userid"] ;
    $name=$_POST["name"] ;
    $home=$_POST["home"] ;
    $tel= $_POST["tel"] ;
    $hobby=$_POST["hobby"] ;
    $memo =$_POST["message"] ;
    echo $hobby ;

    
    $addData = array(
        $userid,
        $name,
        $home,
        $tel,
        $memo,
    );

    $hobbyR = explode(',', $hobby);

    foreach($hobbyR as  $value){
        echo "vallue =".$value." is <br>" ;
         $addData[] = $value ;
    }

    print_r($addData) ;

    
        $num = 0 ;
        echo "もらったでーた".$userid." &  ".$name." &  ".$home." &  ".$tel." &  ".$hobby." &  ".$memo ;
        if (($handle = fopen("../../DATABASE/DATA.csv", "a")) !== FALSE) {
            fputcsv($handle,$addData) ;

            fclose($handle);
        }
    ?>

</div>
</body>
</html>
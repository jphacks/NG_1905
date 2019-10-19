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

        echo "もらったでーた".$userid." &  ".$name." &  ".$home." &  ".$tel." &  ".$hobby." &  ".$message ;
        // if (($handle = fopen("../../DATABASE/DATA.csv", "r")) !== FALSE) {
        //         if($data[0] == $userid){
        //             if($data[1] == $userpassword){
        //                 echo "SUCCSEESS"  ;
                        
        //                 echo "<form name=\"IDPW\" action=\"../Main/main.php\" method=\"post\">\" " ;
        //                     echo "<input type=\"text\" name=\"userid\" hidden value=\"".$userid."\">" ;
        //                 echo "</form>" ;
        //                 echo "<script>" ;
        //                     echo "document.IDPW.submit();" ;
        //                 echo "</script>" ;
        //             }
        //             break ;
        //         }
        //         echo "Not Detected" ;
        //     }
        //     fclose($handle);
        // }
        ?>

</div>
</body>
</html>
<?php
    //  ob_start();
        $connect = mysqli_connect('localhost','root','','test') or  die ($connect ->mysqli->error);
        $incorrect = false;
        if(isset($_POST['submit'])){
            if( $age = $_POST['age']>5 &&  $age = $_POST['age'] <120){
                $surname = $_POST['surname'];
                $fName = $_POST['fName'];
                $cell = $_POST['cellNo'];
                $date = $_POST['date'];
                $age = $_POST['age'];

                $sql = "INSERT INTO personaldetails(surname, firstName, cellNumber, date, age) VALUES ('$surname','$fName','$cell','$date','$age')";
                
                $res = mysqli_query($connect, $sql);
                if($res){
                    echo 'details  in  ';
                }else{
                    echo 'error';
                }

                $pizza = isset($_POST['pizza']);
                $pasta= isset($_POST['pasta']);
                $pv= isset($_POST['pv']);
                $chickenStir= isset($_POST['csf']);
                $beefStir = isset($_POST['bsf']);
                $other= isset($_POST['other']); 
                $sql2 = "INSERT INTO foods(pizza, pasta, papVors, chickenStir, beefStir, other) VALUES ('$pizza','$pasta','$pv','$chickenStir','$beefStir','$other')";
                $res2 = mysqli_query($connect, $sql2);
                if($res2){
                    echo 'food in  ';
                }else{
                    echo 'error';
                }

                $r1 =$_POST['r1'];
                $r2 = $_POST['r2'];
                $r3 = $_POST['r3'];
                $r4 =($_POST['r4']);
                
                $sql3 = "INSERT INTO rating(eatOut, movies, tv, radio) VALUES ('$r1','$r2','$r3','$r4')";
                $res3 = mysqli_query($connect, $sql3);
                if($res2){
                    echo 'rating in';
                }else{
                    echo 'error';
                }
                // ob_end_flush();
                header('Location: index.php');
            }else{
                $incorrect = true;
                $error = "<span class='error'> please enter age between 5 ans 120 </span>";
            }
        }
        
?>
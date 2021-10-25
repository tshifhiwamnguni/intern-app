<?php
         $connect = mysqli_connect('localhost','root','','test') or  die ($connect ->mysqli->error);
         //total surveys
         $sql = "SELECT * FROM personaldetails";
         $res = mysqli_query($connect, $sql);
         $total = mysqli_num_rows($res);

        # average age
        $sql = "SELECT age FROM personaldetails";
        $res = mysqli_query($connect, $sql);
        $storeData = mysqli_fetch_all($res, MYSQLI_ASSOC);

        function averageAge(){
            $age= 0;
            foreach($GLOBALS['storeData'] as $ageData){
                $age += $ageData['age']; 
            }     
            $aveAge = $age/$GLOBALS['total'];
            return $aveAge;
        }
        $_aveAge = averageAge();

        //oldest
        function oldestFunc(){
            $oldest=0;
            foreach($GLOBALS['storeData'] as $currentAge){
                if($currentAge['age'] > $oldest){
                    $oldest = $currentAge['age'];
                }
            }
            return $oldest;
        }
        $_oldest = oldestFunc();

        //youngest

        function youngFunc(){
            $youngest=500;
            foreach($GLOBALS['storeData'] as $currentAge2){
                if($currentAge2['age'] < $youngest){
                    $youngest = $currentAge2['age'];
                }
            
            }
            return $youngest;
        }
        $_youngest = youngFunc();
        
        #foods

        #pizza percentage
        $sql = "SELECT * FROM foods WHERE pizza = 1" ;
        $res = mysqli_query($connect, $sql);
        $pizzaNum = mysqli_num_rows($res);
        $PizzaPercentage = $pizzaNum/$total*100;

        #pasta percentage
        $sql = "SELECT * FROM foods WHERE pasta = 1" ;
        $res = mysqli_query($connect, $sql);
        $pastaNum = mysqli_num_rows($res);
        $pastaPercentage = $pastaNum/$total*100;

        #pap and vors percentage
        $sql = "SELECT * FROM foods WHERE papVors = 1" ;
        $res = mysqli_query($connect, $sql);
        $pvNum = mysqli_num_rows($res);
        $PvPercentage = $pvNum/$total*100;

        #ratings

        #eat out
        
          $sql = "SELECT eatOut FROM rating";
          $res = mysqli_query($connect, $sql);
          $storeData = mysqli_fetch_all($res, MYSQLI_ASSOC);
  
          function averageEatOut(){
              $eatOut= 0;
              foreach($GLOBALS['storeData'] as $ageData){
                  $eatOut += $ageData['eatOut']; 
              }     
              $aveEatOut = $eatOut/$GLOBALS['total'];
              return $aveEatOut;
          }
          $_aveEatOut = averageEatOut();

        #movie 
        
        $sql = "SELECT movies FROM rating";
        $res = mysqli_query($connect, $sql);
        $storeData = mysqli_fetch_all($res, MYSQLI_ASSOC);

        function averageMovies(){
            $movie= 0;
            foreach($GLOBALS['storeData'] as $movieData){
                $movie += $movieData['movies']; 
            }     
            $aveMovie = $movie/$GLOBALS['total'];
            return $aveMovie;
        }
        $_aveMovie = averageMovies();

        #tv 
        
        $sql = "SELECT tv FROM rating";
        $res = mysqli_query($connect, $sql);
        $storeData = mysqli_fetch_all($res, MYSQLI_ASSOC);

        function averageTV(){
            $tv= 0;
            foreach($GLOBALS['storeData'] as $tvData){
                $tv += $tvData['tv']; 
            }     
            $aveTv = $tv/$GLOBALS['total'];
            return $aveTv;
        }
        $_aveTv = averageTv();

        #radio 
        
        $sql = "SELECT radio FROM rating";
        $res = mysqli_query($connect, $sql);
        $storeData = mysqli_fetch_all($res, MYSQLI_ASSOC);

        function averageRadio(){
            $radio= 0;
            foreach($GLOBALS['storeData'] as $radioData){
                $radio += $radioData['radio']; 
            }     
            $aveRadio = $radio/$GLOBALS['total'];
            return $aveRadio;
        }
        $_aveRadio = averageRadio();
        if (isset($_POST['submit'])) {
            header("Location: index.php");
        }
    ?>
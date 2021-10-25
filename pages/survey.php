<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..//css/red.css">
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
 <?php require '..//backend/processing.php' ?>
<h1>TAKE SURVEY</h1>
    <form action="survey.php" method="POST">
        <h3>personal question</h3>
        <div>
            <table>
                <tr> 
                    <td><label for="">Surname</label></td> <td><input type="text" name="surname" required></td>
                </tr>
                <tr> 
                    <td><label for="">first names</label></td> <td><input type="text" name="fName" required></td>
                </tr>
                <tr> 
                    <td><label for="">contact number</label></td> <td><input type="text" name="cellNo" required></td>
                </tr>
                <tr> 
                    <td><label for="">date</label></td> <td><input type="date" name="date" required></td>
                </tr>
                <tr> 
                    <td><label for="">age</label></td> <td><input type="text" name="age" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php if($incorrect){ echo $error;} ?>
                    </td>
                </tr>
            </table>
        
        </div>
        <h3>what is your favorite food?(you can choose more than 1 answer)</h3>
        <input type="checkbox" name="pizza" id="" value="1"> <label for="">Pizza</label><br>
        <input type="checkbox" name="pasta" id="" value="1"> <label for="">Pasta</label><br>
        <input type="checkbox" name="pv" id="" value="1"> <label for="">pap and vors</label><br>
        <input type="checkbox" name="csf" id=""value="1"> <label for="">chicken stir fry</label><br>
        <input type="checkbox" name="bsf" id=""value="1"> <label for="">beef stir fry</label><br>
        <input type="checkbox" name="other" id=""value="1"> <label for="">other</label><br><br>
     
       <h3> on a scale of 1 to 5 to indicate wether you strongly agree or strongly disagree</h3>
        <table>
            <th>
                <td>strongly agree <br> (1)</td>
                <td>agree <br> (2)</td>
                <td>neutral <br> (3)</td>
                <td>disagree <br> (4)</td>
                <td>strongly disagree <br> (5)</td>
            </th>
            <tr>
                <td>i like to eat out</td>
                <td><input type="radio" name="r1" id="" value="1"></td>
                <td><input type="radio" name="r1" id="" value="2"></td>
                <td><input type="radio" name="r1" id=""  value="3"></td>
                <td><input type="radio" name="r1" id="" value="4"></td>
                <td><input type="radio" name="r1" id="" value="5"></td>
            </tr>
            <tr>
                <td>i like to watch movies</td>
                <td><input type="radio" name="r2" id=""  value="1"></td>
                <td><input type="radio" name="r2" id=""  value="2"></td>
                <td><input type="radio" name="r2" id=""  value="3"></td>
                <td><input type="radio" name="r2" id=""  value="4"></td>
                <td><input type="radio" name="r2" id=""  value="5"></td>
            </tr>
            <tr>
                <td>i like to watch tv</td>
                <td><input type="radio" name="r3" id=""  value="1"></td>
                <td><input type="radio" name="r3" id=""  value="2"></td>
                <td><input type="radio" name="r3" id=""  value="3"></td>
                <td><input type="radio" name="r3" id=""  value="4"></td>
                <td><input type="radio" name="r3" id=""  value="5"></td>
            </tr>
            <tr>
                <td>i like to listen to the radio</td>
                <td><input type="radio" name="r4" id=""  value="1"></td>
                <td><input type="radio" name="r4" id=""  value="2"></td>
                <td><input type="radio" name="r4" id=""  value="3"></td>
                <td><input type="radio" name="r4" id=""  value="4"></td>
                <td><input type="radio" name="r4" id=""  value="5"></td>
            </tr>
        </table>
        <button class="submit" type="submit" name="submit">submit  </button>
     </form>

     <script>
         $(document).ready(function(){
             $('#checkBtn').click(function(){
                 checked = $("input[type=checkbox]: checked").length;

                 if (!checked) {
                     alert("please choose 1 meal");
                     return false;
                 }
             })
         })
     </script>
</body>
</html>
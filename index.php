<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #res{
            margin-left:2.2%;
        }
        #btns{
            margin-left:6.9%
        }
        #main{
            width:40%;
            margin:auto;
            
        }
        form{
            margin:auto;
        }
        button{
            
            width:100%;
        }
    </style>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btn"])) {
        if(!empty($_POST["conversionType"]))
        $type=$_POST["conversionType"];

        if(!empty($_POST["val"]))
        $quantity=$_POST["val"];
        
        switch($type){
            case "minute":
                $res=$quantity*60;
                $val="$quantity Hour = $res Minutes";
                break;
            case "second":
                $res=$quantity*60*60;
                $val="$quantity Hour = $res Seconds";
                break;
        }
        
        
       

        
         

        
        


    }

    }
    ?>
    <div id="main">
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
     <table>
    <tr><td><td><input type="number" name="val" value="<?php echo(isset($val)?$val:" ");?>"></td> </tr> 
    <tr></tr>
     
    <tr><td></td><td><input type="radio" name="conversionType" value="minute">hours to mins</td></tr>
    <tr><td></td><td><input type="radio" name="conversionType" value="second">hours to seconds</td></tr>
     <tr></tr><tr></tr>
     <tr><td></td><td><?php echo(isset($val)?$val:" ");?></td></tr>
     <tr></tr>
    <tr><td></td><td><button type="submit" name="btn" >Convert</button></td></tr>
     
     </table>
     <br><br> 
     
    </form>
    </div>

</body>
</html>
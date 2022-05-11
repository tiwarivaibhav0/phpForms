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
    </style>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["btn"])) {
        $num1=$_POST["num1"];
        
        $num2=$_POST["num2"];
        
        $action=$_POST["btn"];
       

        switch($action){
            case "+": 
                $res=$num1+$num2;
                
                break;
            case "*": 
                $res=$num1*$num2;
                break;
            case "-": 
                $res=$num1-$num2;
                break;
            case "/": 
                $res=$num1/$num2;
                break;
            
                      
        }  

    }

    }
    ?>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
     Number 1 <input type="number" placeholder="Number1" name="num1" value="<?php echo(isset($num1)?$num1:" ");?>"><br><br>
     Number 2 <input type="number" placeholder="Number2" name="num2" value="<?php echo(isset($num2)?$num2:" ");?>"><br><br>
     Result   <input type="text" id="res" value="<?php echo(isset($res)?$res:" ");?>">
     <br><br> 
     <div id="btns">
     <button type="submit" name="btn" value="+">+</button>
     <button type="submit" name="btn" value="-">-</button>
     <button type="submit" name="btn" value="*">*</button>
     <button type="submit" name="btn" value="/">/</button>
     </div>
    </form>
    

</body>
</html>
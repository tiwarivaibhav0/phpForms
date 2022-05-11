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
        if(!empty($_POST["length"]))
        $length=$_POST["length"];
        
        if(!empty($_POST["width"]))
        $width=$_POST["width"];
        
        
       

        $Area=$length*$width;
        $peri=$length+$width;  

        
        


    }

    }
    ?>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
     <table>
    <tr><td>Length of Rectangle </td><td><input type="number" name="length" value="<?php echo(isset($length)?$length:" ");?>"></td> </tr> 
    <tr></tr>
    <tr><td>Width of Rectangle </td><td><input type="number"  name="width" value="<?php echo(isset($width)?$width:" ");?>"></td> </tr>
    <tr></tr><tr></tr>
    <tr><td></td><td><button type="submit" name="btn" >Calculate area & Perimeter</button></td></tr>
     
     </table>
     <br><br> 
     <div id="btns">
         <p><?php echo(isset($Area)?"Area is $Area sq m":" ");?></p>
         <p><?php echo(isset($peri)?"Perimeter is $peri sq m":" ");?></p>
         
     
     </div>
    </form>
    

</body>
</html>
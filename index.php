<?php
      $unit=$_POST["units"];
      if($unit>0&&$unit<51)
         $rate=3.50;
      if($unit>50&&$unit<151)
         $rate=4.00; 
      if($unit>150&&$unit<251)
         $rate=5.20;
      if($unit>250)
         $rate=6.50;            
       

      $bill=$unit*$rate;

      echo("Your bill is $bill");


      
 


     ?>
     <br>
     <a href="index.html">Go To Home Page</a>
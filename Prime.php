<!DOCTYPE html>
<html>
<head>
  <title>PHP</title>
</head>
<body>
<?php  
   $check=0;
   $num=10;
   for($i=2;$i<=($num/2);$i++)
     { 
       if($num%$i==0)
         {
          $check++;
          if($check==1)
          {
             break;
          }
         }
     }

     if($num)
           {if($check==0)
               {echo "It is a Prime Number";
               }
           else
                {
                 echo "It is not a Prime Number";}
                }
  
?>

</body>
</html>

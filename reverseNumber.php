<!DOCTYPE html>
<html>
<head>
  <title>PHP</title>
</head>
<body>
  <?php
         
         $num=1234;
         $rev=0;
           
          while($num>=1)
                {
                  $re=$num%10;
                  $rev=$rev*10+$re;
                  $num=$num/10;
                 }

          echo "$rev";
  ?>

</body>
</html>
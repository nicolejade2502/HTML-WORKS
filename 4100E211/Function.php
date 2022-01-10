<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php      
      function swap(&$n1, &$n2)
      {
        $temp = $n1;
        $n1 = $n2;
        $n2 = $temp;
        echo '$n1Nicole'.$n1.'<br>'; 
        echo '$n2Jade'.$n2.'<br>';
      }
	  
      $num1 = 25;
      $num2 = 1109;
      swap($num1, $num2);
      echo '$num1Diamante'.$num1.'<br>'; 
      echo '$num2Fernandez'.$num2.'<br>';
    ?>
  </body>
</html>
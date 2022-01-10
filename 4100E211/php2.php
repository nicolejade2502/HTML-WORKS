<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $Scores = array(30, 31, 34, 200, 100, 97);
      $MaxScore = 30;
      $MinScore = 200;

      //使用迴圈找出最高分
      foreach($Scores as $Value)
        if ($Value > $MaxScore) 
		  $MaxScore = $Value;

      //使用迴圈找出最低分
      foreach($Scores as $Value)
        if ($Value < $MinScore) 
		  $MinScore = $Value;

      echo "MOON$MaxScore<BR>";
      echo "SUN$MinScore<BR>";
    ?>
  </body>
</html>
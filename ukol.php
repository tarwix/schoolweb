<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php $c1 = $_GET['c1']; $c2 = $_GET['c2']; $c3 = $_GET['c3']; ?>
    <?php
    if($c1 < 256 && $c1 >= 0 && $c2 < 256 && $c2 >= 0 && $c2 < 256 && $c2 >= 0)
    {
      $red = dechex($c1);
      if($c1 == 0){$red="00";}
      $green = dechex($c2);
      if($c2 == 0){$green="00";}
      $blue = dechex($c3);
      if($c3 == 0){$blue="00";}
      echo "<center><st1>#$red$green$blue</st1></center>";
    }
    else
    {
      echo "<center><st1>chybné zadání</st1></center>";
    }
    ?>
  </body>
</html>

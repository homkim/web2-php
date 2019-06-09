<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>functions test</title>
</head>
<body>
  <h1>functions test</h1>
  <?php
  function print_head($x, $y) {
    echo '</h2>'.$x.' + '.$y.' = ';
  }
     function sum($a, $b) {
       print_head($a, $b);
        echo $a + $b;
        echo '</br>';
     }

     echo sum(3,4);
     echo sum(7,9);
  ?>
</body>
</html>
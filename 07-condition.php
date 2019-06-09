<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Condition</title>
</head>
<body>
  <h1>Condition</h1>
  <h2>if</h2>
  <?php
    for ($a=1; $a < 6; $a++) { 
        echo $a.'<br>';
        if ($a == 3) {
            echo 'true'.'</br>';
        } else {
            echo 'false'.'</br>';
        }
    }
  ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array Test</title>
</head>
<body>
  <h1>Array Test</h1>
  <?php
    //  $arr = Array('egoing','leezche','duru','taeho');
     $arr = scandir('data');

     for($i = 2; $i < count($arr); $i++){
         echo $arr[$i].'</br>';
     }
  ?>
</body>
</html>
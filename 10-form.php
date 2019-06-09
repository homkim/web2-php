<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Test</title>
</head>
<body>
  <h1>Form Test</h1>
  <?php
    // file_put_contents('data/'.$_GET['title'], 'data/'.$_GET['desc']);
     echo '<p>Title is '.$_POST['title'].'</p>';
     echo '<p>Description is '.$_POST['desc'].'</p>';
  ?>
</body>
</html>
<?php require('lib/print.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to PHP</title>
</head>

<body>
    <h1> <a href="index.php">WEB</a></h1>
    <ol>
        <?php print_list();?>
    </ol>

    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
        <p><input type="text" name="title" id="title" placeholder="Title"></p>
        <p><textarea name="desc" id="desc" placeholder="Desctiption"></textarea></p>
        <p><input type="submit"></p>
    </form>



</body>

</html>
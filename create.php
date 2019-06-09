<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to PHP</title>
</head>

<body>
    <h1> <a href="index.php">WEB</a></h1>
    <ol>
        <?php
        // $arr = ['HTML', 'CSS', 'JavaScript'];
        $arr = scandir('data');

        $i = 2;
        while ($i < count($arr)) {
            if (!($arr[$i] == '.' || $arr[$i] == '..' || strtoupper($arr[$i]) == 'WEB')) {
                echo '<li><a href="index.php?id=' . $arr[$i] . '"> ' . $arr[$i] . '</a></li>';
            }
            $i++;
        }
        ?>
    </ol>

    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
        <p><input type="text" name="title" id="title" placeholder="Title"></p>
        <p><textarea name="desc" id="desc" placeholder="Desctiption"></textarea></p>
        <p><input type="submit"></p>
    </form>



</body>

</html>
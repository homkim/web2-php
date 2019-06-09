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
    <?php if (isset($_GET['id'])) { ?>
        <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <?php } ?>
    <form action="update_process.php" method="post">
        <p><input type="hidden" name="oldtitle" id="oldtitle"  value="<?=$_GET['id']?>"></p>
        <p><input type="text" name="title" id="title" value="<?=$_GET['id']?>"></p>
        <p><textarea name="desc" id="desc"><?=file_get_contents('./data/' . $_GET['id'], true)?></textarea></p>
        <p><input type="submit"></p>
    </form>
</body>

</html>
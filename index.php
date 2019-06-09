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
            echo '<li><a href="index.php?id='.$arr[$i].'"> '.$arr[$i].'</a></li>';
            }
            $i++;
        }
        ?>
    </ol>
    <h2>
        <?php
        if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo 'Welcome, PHP';
        }
        ?>
    </h2>
    <?php
    if (isset($_GET['id'])) {
        echo file_get_contents('./data/' . $_GET['id'], true);
    } else {
        //echo 'Hello, PHP';
        echo file_get_contents('./data/web', true);
    }
    ?>
</body>

</html>
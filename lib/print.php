<?php
    function print_title() {

        if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo 'Welcome, PHP';
        }
    }

    function print_description() {
        if (isset($_GET['id'])) {
            echo file_get_contents('./data/' . $_GET['id'], true);
        } else {
            //echo 'Hello, PHP';
            echo file_get_contents('./data/web', true);
        }
    }

    function print_list() {
            // $arr = ['HTML', 'CSS', 'JavaScript'];
            $arr = scandir('data');

            $i = 2;
            while ($i < count($arr)) {
                if (!($arr[$i] == '.' || $arr[$i] == '..' || strtoupper($arr[$i]) == 'WEB')) {
                    echo '<li><a href="index.php?id=' . $arr[$i] . '"> ' . $arr[$i] . '</a></li>';
                }
                $i++;
            }
    }
?>        
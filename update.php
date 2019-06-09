<?php require('view/top.php'); ?>

<a href="create.php">create</a>
<?php if (isset($_GET['id'])) { ?>
    <a href="update.php?id=<?= $_GET['id'] ?>">update</a>
<?php } ?>
<form action="update_process.php" method="post">
    <p><input type="hidden" name="oldtitle" id="oldtitle" value="<?= $_GET['id'] ?>"></p>
    <p><input type="text" name="title" id="title" value="<?= $_GET['id'] ?>"></p>
    <p><textarea name="desc" id="desc"><?= file_get_contents('./data/' . $_GET['id'], true) ?></textarea></p>
    <p><input type="submit"></p>
</form>
<?php require('view/bottom.php'); ?>
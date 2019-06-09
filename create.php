<?php require('view/top.php'); ?>


<a href="create.php">create</a>
<form action="create_process.php" method="post">
    <p><input type="text" name="title" id="title" placeholder="Title"></p>
    <p><textarea name="desc" id="desc" placeholder="Desctiption"></textarea></p>
    <p><input type="submit"></p>
</form>

<?php require('view/bottom.php'); ?>
<?php

use App\Services\Page;

if (!$_SESSION["user"])
    \App\Services\Router::redirect('/login');
?>

<!doctype html>
<html lang="en">
<?php
Page::part('header');
?>
<body>
<?php
Page::part('navbar');
?>
<div class="container mt-4">
    <div class="jumbotron">
        <div class="display-4"><?= $_SESSION["user"]["full_name"] ?></div><br>
        <div><img src="<?= $_SESSION["user"]["avatar"] ?>" height="300px" alt=""></div>
    </div>
</div>
</body>
</html>
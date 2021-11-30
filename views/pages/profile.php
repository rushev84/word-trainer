<?php

use App\Services\Page;

session_start();

if (!$_SESSION["user"])
    \App\Services\Router::redirect('login');
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
        <h1 class="display-4">Hello, <?= $_SESSION["user"]["full_name"] ?> </h1>
        <img src="<?= $_SESSION["user"]["avatar"] ?>" width="400px" alt="">
    </div>
</div>
</body>
</html>
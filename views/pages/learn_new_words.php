<?php
use App\Services\Page;
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
        <h1 class="display-4">Learn new words</h1>
    </div>
</div>
</body>
</html>
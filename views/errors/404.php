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
    <h1>404: Page not found</h1>
</div>
</body>
</html>
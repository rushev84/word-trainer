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

    <div class="row post-list">

    </div>




    <div class="jumbotron">
        <h4>abdomen</h4><br>

        <div class="btn btn-outline-dark">живот</div>
        <div class="btn btn-outline-dark">позвоночник</div>
        <div class="btn btn-outline-dark">бицепс</div>
        <div class="btn btn-outline-dark">щека</div>

    </div>
</div>
<script src="/resources/assets/js/main.js"></script>
</body>
</html>
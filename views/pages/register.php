<?php
use App\Services\Page;

if ($_SESSION["user"])
    \App\Services\Router::redirect('/profile');
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
<div class="container">
    <div class="mt-4"><h4>Sign Up</h4></div>

    <form class="mt-4" action="/auth/register" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="user_name" class="form-label">Username</label>
            <input type="text" name="user_name" class="form-control" id="user_name">
        </div>
        <div class="mb-3">
            <label for="full_name" class="form-label">Full name</label>
            <input type="text" name="full_name" class="form-control" id="full_name">
        </div>
        <div class="mb-3">
            <label for="user_avatar" class="form-label">User avatar</label>
            <input type="file" name="user_avatar" class="form-control" id="user_avatar">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Password confirmation</label>
            <input type="password" name="confirm_password" class="form-control" id="password_confirm">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
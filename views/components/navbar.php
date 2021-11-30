<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">WordTrainer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                if ($_SESSION["user"]) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/learn-new-words">Learn new words</a>
                    </li>
                    <li>
                        <a class="nav-link active" aria-current="page" href="/review-words">Review words</a>
                    </li>
                    <?php
                };
                ?>
            </ul>
            <div class="d-flex">
                <?php
                if (!$_SESSION["user"]) {
                    ?>
                    <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    <a class="nav-link active" aria-current="page" href="/register">Register</a>
                    <?php
                } else {
                    ?>
                    <a class="nav-link active" aria-current="page" href="/profile">Profile</a>
                    <form action="/auth/logout" method="post">
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>
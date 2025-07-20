<?php
include "./php/conn.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navi bar</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>
    <script defer src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<nav class="navbar navbar-expand-lg bg-black " data-bs-theme="dark">
        <div class="container-fluid ">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    <a class="nav-link active" aria-current="page" href="#">About us</a>
                    <a class="nav-link active bg-primary rounded-4" aria-current="page" href="./applicant/apply.php">Apply</a>
                </div>
            </div>
            <div class="mx-1">
            <?php
                // Check if user is logged in
                if (isset($_SESSION['session_user_email'])) {
                    // If logged in, display user's email and logout button
                    // echo '<a class="text-light">' . $_SESSION['session_user_email'] . '</a>';
                    echo '<a class="nav-link active bg-primary rounded-3 m-1 p-1 fw-bold text-white" aria-current="page" href="./log_out.php">LOGOUT</a>';
                }
                ?>
            </div>
        </div>
    </nav>
<?php
include "./conn.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @font-face {
            font-family: 'Acumin Variable Concept';
            src: url('../assets/font/AcuminVariableConcept-WideExtraLight.ttf');
        }

        .navbar {
            background: linear-gradient(to right, #004f7f, #072d4f);
            font-family: 'Acumin Variable Concept', sans-serif;
            text-transform: uppercase;
            font-weight: lighter;
            font-size: larger;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .vl {
            border-left: 1px solid white;
            height: 50px;
            align-self: center;
        }

        .ms-auto {
            margin-left: auto !important;
        }

        .sizeicon {
            font-size: 50px;
            align-self: center;
        }

        .Administrator {
            font-family: 'Acumin Variable Concept', sans-serif !important;
            text-transform: capitalize !important;
            font-weight: initial !important;
            font-size: medium !important;
            padding: 0;
            margin: 0;
            align-self: center;
        }

        .nav-item-center {
            display: flex;
            align-items: center;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <a class="nav-link" aria-current="page" href="./index.php"> <img src="./img/Q_Online_Logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top"> </a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ps-2">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item nav-item-center px-2">
                        <div class="vl"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item nav-item-center px-2">
                        <div class="vl"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./apply.php">Apply</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-item-center">
                        <div class="px-2">
                        <a class="nav-link logout-link p-0 m-0 d-block text-end" href="./log_out.php" onclick="return logout();">Logout</a>
                        <a class="nav-link logout-link Administrator mt-0" href="#">
                                <?php
                                // Check if user is logged in
                                if (isset($_SESSION['session_user_email'])) {
                                    // If logged in, display user's email and logout button
                                    echo $_SESSION['session_user_email'];
                                    // echo '<a class="nav-link active bg-primary rounded-3 m-1 p-1 fw-bold text-white" aria-current="page" href="./php/log_out.php">LOGOUT</a>';
                                }
                                ?>

                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-item-center ps-2">
                        <div class="vl"></div>
                    </li>
                    <li class="nav-item nav-item-center ps-2">
                        <i class="bi bi-person nav-link sizeicon"></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script defer src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function logout() {
        return confirm("Are you sure you want to log out?");
    }
</script>
</body>

</html>
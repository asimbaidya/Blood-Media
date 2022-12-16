<?php
session_start();
require_once('./db/config.php');
?>

<!-- below HTML -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBank</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonmous">
    <!-- Javascript for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="/project/static/styles/style.css">
    <link href="/project/asset/favicon.png" rel="icon" type="image/png" />
    <style>
        .navbar {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            background-color: #ffa2ae;
        }
    </style>
</head>


<body>
    <!----------------------------- nav -------------------------------  -->
    <nav class="navbar navbar-expand-lg" style="background-color:#d20f39">
        <div class="container">
            <a class="navbar-brand" href="/project">BloodBank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/project/donate.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/project/search.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/project/about.php">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    // php code
                    if (isset($_SESSION['user_loggedin']) && $_SESSION['user_loggedin']) {
                        echo '<li class="nav-item"><a class="nav-link active" href="/project/user.php">Profile</a></li>';
                        echo '<li class="nav-item"><a class="nav-link active" href="/project/logout.php">Logout</a></li>';
                    } elseif (isset($_SESSION['admin_loggedin']) && $_SESSION['admin_loggedin']) {
                        echo '<li class="nav-item"><a class="nav-link active" href="/project/admin.php">Admin </a></li>';
                        echo '<li class="nav-item"><a class="nav-link active" href="/project/logout.php">Logout</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link active" href="/project/login.php">Login</a></li>';
                    }
                    // php code
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Abouts  -->

    <div class="container">
        <!-- <div class="shadow-lg p-3 mb-5 bg-body rounded">Larger shadow</div> -->
        <div class="mt-4">
            <details class="faq shadow-lg p-1  ps-4 mb-2 bg-body rounded">
                <summary class="faq-question">WTF is the purpose of this site!!</summary>
                <span class="faq-ans">
                    To pass a shittty course
                </span>
            </details>
            <details class="faq shadow-lg p-1 ps-4 mb-2 bg-body rounded">
                <summary class="faq-question">ER url!</summary>
                <span class="faq-ans">
                    <a href="/">TODO</a>
                </span>
            </details>
            <details class="faq shadow-g p-1 ps-4 mb-5 bg-body rounded">
                <summary class="faq-question">Schema url!</summary>
                <span class="faq-ans">
                    <a href="/">TODO</a>
                </span>
            </details>
        </div>

    </div>
</body>

</html>
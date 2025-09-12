<?php
    $file_name = basename($_SERVER['PHP_SELF']);
    $base = '';
    $outter = '';
    if ($file_name == "index.php") {
        $base = 'pages/';
    } else {
        $outter = '../';
    }

    echo '<li class="nav-item"><a href="'. $outter . 'index.php" class="nav-link" aria-current="page">Home</a></li>
    <li class="nav-item">
        <a class="nav-link" href="' . $base . 'stwo.php">Project Information</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="' . $base . 'sthree.php">Designed Spaces</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="' . $base . 'sfour.php">3D Renderings</a>
    </li>';
?>
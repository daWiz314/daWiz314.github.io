<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Favicon-->
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicons/favicon.png">

    <title>Final Project - Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap_5.0.2/bootstrap.min.css" rel="stylesheet">

    <!-- Lightbox -->
    <link href="css/lightbox.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- CSS for this page -->
    <link href="css/index.css" rel="stylesheet">


</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="0" class="scrollspy-example" tabindex="0">

    <!--Bootstrap Nav - https://getbootstrap.com/docs/5.0/components/navbar/#nav-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Senior Project
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.html" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/stwo.html">Project Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/sthree.html">Designed Spaces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/sfour.html">3D Renderings</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section One -->
    <div id="sone">
        <div class="container">
            <h1>A Built-In Family</h1>
            <main>
                <p> Hello, my name is Rebecca James. I am a senior at Purdue Fort Wayne studying Interior Design. I
                    created this website to showcase my Interior Design Senior Project for those who may be unable to
                    make it to our showcase as well as a chance to showcase a few other talents I picked up during my
                    four years at PFW. The base line of this project was to take a current project that is happening,
                    select a special feature and create our own design through our research and the existing client
                    requests and requirements.</p>
            </main>
            <container>
                <span id="p1" class="project"><a href="pages/stwo.html">
                        <p>Project Information</p>
                    </a></span>
                <span id="p3" class="project"><a href="pages/sthree.html">
                        <p>Designed Spaces</p>
                    </a></span>
                <span id="p4" class="project"><a href="pages/sfour.html">
                        <p>3D Renderings</p>
                    </a></span>
            </container>

        </div>
    </div>

    <?php include 'pages/footer.php'; ?>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Lightbox JS -->
    <script src="js/lightbox.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap_5.0.2/bootstrap.min.js"></script>
</body>

</html>
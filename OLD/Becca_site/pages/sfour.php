<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--Favicon-->
  <link rel="shortcut icon" href="../img/favicons/favicon.ico">
  <link rel="icon" type="image/png" href="../img/favicons/favicon.png">
  <title>Final Project - 3D Renderings</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap_5.0.2/bootstrap.min.css" rel="stylesheet">

  <!-- Lightbox -->
  <link href="../css/lightbox.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="../css/main.css" rel="stylesheet">

  <!-- Page CSS-->
  <link rel="stylesheet" href="../css/3d_renderings.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="0" class="scrollspy-example" tabindex="0">

  <!--Bootstrap Nav - https://getbootstrap.com/docs/5.0/components/navbar/#nav-->
  <?php include 'includes/nav.php'; ?>

  <!-- Section Four -->

  <main id="sfour">
    <aside>
      The goal of this design was to take arts and crafts design and modernize
      it to meet the clients wishes while
      taking staples from the original style. In order to successfully
      showcase the qualities of arts and crafts design,
      the focus was on using natural materials, built-in furniture, exposed
      beams, and earth tones throughout the house.
      The majority of the seating in the residence is built-in as well as he
      shelving units in the household. With
      exception to the master bathroom, all the built-ins are made from
      natural woods -- including, but not limited to,
      mahogany, gumwood, and cherry wood. In addition to the built-ins, there
      are hints of stain glass windows
      throughout, as well as textured glass to serve as a similar look as the
      stained windows. This is in attempt to
      modernize the concept of stained glass without adding more colors and
      patterns in the house. There are exposed
      beams as you enter through the front door that lead to the three other
      directions of the house. They are also
      visible from the second floor balcony when looking down onto the living
      room. Natural stone is used to frame and
      extend the fireplace to the 20’ open ceilings as well as lining the
      shower walls.
    </aside>
    <article>
      <figure>
        <img src="../img/kitchen/Screenshot 2022-11-07 233641.png" class="parent_object" alt="">
        <figcaption></figcaption>
        <div class="img_container">
          <img onclick="change_viewed($(this))" src="../img/kitchen/East Kitchen w Island Elevation with Finishes -- Final.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/kitchen/South Kitchen w Island Elevation with Finishes -- Final.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/kitchen/West Kitchen w Island Elevation with Finishes -- Final.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/kitchen/Screenshot 2022-11-07 234200.png" alt="" class="smaller">
        </div>
      </figure>
      <figure>
        <img src="../img/theatre/Screenshot 2022-11-07 212051.png" class="parent_object" alt="">
        <figcaption></figcaption>
        <div class="img_container">
          <img onclick="change_viewed($(this))" src="../img/theatre/Theater Seating Elevation.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/theatre/Screenshot 2022-11-07 212343.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/theatre/Theater Media Elevation.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/theatre/bed theater.png" alt="" class="smaller">
        </div>
      </figure>
      <figure>
        <img src="../img/master_bedroom/Master Bed Elevation.png" class="parent_object"" alt="">
        <figcaption></figcaption>
        <div class="img_container">
          <img onclick="change_viewed($(this))" src="../img/master_bedroom/master bed rendering.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/master_bedroom/media center.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/master_bedroom/Master Bed Media Elevation.png" alt="" class="smaller">
        </div>
      </figure>
      <figure>
        <img src="../img/master_bath/master bath rendering.png" class="parent_object" alt="">
        <figcaption></figcaption>
        <div class="img_container">
          <img onclick="change_viewed($(this))" src="../img/master_bath/master bath.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/master_bath/closet rendering.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/master_bath/master walk in elevation.png" alt="" class="smaller">
        </div>
      </figure>
      <figure>
        <img src="../img/other_views/living room.png" class="parent_object" alt="">
        <figcaption></figcaption>
        <div class="img_container">
          <img onclick="change_viewed($(this))" src="../img/other_views/Screenshot 2022-11-08 001237.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/other_views/Screenshot 2022-11-08 001632.png" alt="" class="smaller">
          <img onclick="change_viewed($(this))" src="../img/other_views/bar.png" alt="" class="smaller">
        </div>
      </figure>
    </article>
  </main>

  <?php include 'includes/footer.php'; ?>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Lightbox JS -->
  <script src="../js/lightbox.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="../js/bootstrap_5.0.2/bootstrap.min.js"></script>

  <!-- Our script -->
  <script src="../js/3d_renderings.js"></script>
</body>

</html>
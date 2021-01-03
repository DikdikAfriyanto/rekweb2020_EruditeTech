<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- my css -->
  <link rel="stylesheet" href="/css/style.css">

  <title><?= $title; ?></title>
</head>

<body>

  <nav class="navbar  navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <a class="nav-link " href="<?= base_url('/'); ?>" style="">Home<span class="sr-only">(current)</span></a>
          <a class="nav-link" href="<?= base_url('/books'); ?>">Library</a>
          <a class="navbar-brand" href="<?= base_url('/'); ?>" style="margin-left: 270px;">
            <img src="/img/logo1.png" width="85" height="50" class="d-inline-block align-top" alt="" loading="lazy">
          </a>

          <?php if (logged_in()) : ?>
            <a class="nav-link" href="logout" style="margin-left: 450px;">Logout</a>
          <?php else : ?>
            <a class="nav-link" href="login " style="margin-left: 450px;">Login</a>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </nav>

  <footer>
    <div class="main-content">
      <div class="left-box col-sm-4 mt-2">
        <h4>EruditeTech</h4>
        <div class="content">
          <p>Erudite Tech adalah kelompok tugas besar rekayasa web yang terdiri dari 4 orang yaitu Dikdik Afriyanto, Ridha Azhar, Adrian Hartanto, Ina Setya. Kelompok kami bertemakan referensi buku</p>

        </div>
      </div>
      <div class="left-box col-sm-4 mt-2">
        <h4>Useful Link</h4>
        <div class="content">
          <ul ">
            <li><a href=" /pages/index">Home </a> </li> <li><a href=" /books"">Library </a></li> 
            <li><a href=" /pages/about">About </a> </li> </ul> </div> </div> <div class=" left-box col-sm-4 mt-2">
              <h4>Follow Us</h4>
              <div class="content">
                <p>Please Follow us on our social media profile in order to keep update</p>
                <div class="social">
                  <a href="https://www.facebook.com/dikdik.c.sances/"><i class="fa fa-facebook" style="font-size:45px"></i></a>
                  <a href="https://www.instagram.com/dikdik_afriyanto19/"><i class='fa fa-instagram' style='font-size:45px'></i></a>
                  <a href="https://twitter.com/login?lang=id"><i class="fa fa-twitter" style="font-size:45px"></i></a>
                  <a href="https://github.com/DikdikAfriyanto"><i class="fa fa-github" style="font-size:45px"></i></a>
                </div>
              </div>

        </div>

      </div>
      <p class="text-center">Copyright © 2020 EruditeTech. All Right Reserved</p>

  </footer>

  <?= $this->renderSection('content'); ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="/js/script.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Allan&family=Francois+One&family=Jura:wght@300&family=Kaushan+Script&family=Poiret+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
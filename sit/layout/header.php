<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>poshoshligim</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="../youtube.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <style>
        .a{
            display: none;
            position: absolute;
            top: 0;
            right: -40px;
        }
        .b{
            display: none;
            position: absolute;
            top: 0;
            left: -55px;
        }
        tr:hover td .a{
            display: flex;

        }
        tr:hover td .b{
            display: flex;

        }
        .up{
          position: absolute;
          left: 0;
          top:-150px;
          z-index: 10000000;
          width: 100%;
          opacity: 0;
          transition:.3s;
        }
        .oo{
          position: relative;
          overflow: hidden;
        }
    </style>
    <!-- Font Awesome -->
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    /> -->

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

<body>
  <div class="container-fluid p-0" style="box-shadow:0 0 0 ;">
  <script src="js2/jQuery.min.js"></script>
    <script>
      $(document).keyup(function(event) {
        if(event.key=='ArrowUp'){
          $('.up').css("top","10px")
          $('.up').css("opacity",".9")

        }
        else{
          $('.up').css("top","-150px")
          $('.up').css("opacity","0")

        }
      })
      $(document).click(function() {
        $('.up').css("top","-150px")
        $('.up').css("opacity","0")
        
      })
    </script>
  
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-3 oo px-0 px-md-5 mb-5" style="border-radius:50px 50px 0 0 ;">
    <div class="container-fluid position-relative  bg-light shadow">
    <div class="up">
        <nav
          class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
          >
          <a
            href=""
            class="navbar-brand font-weight-bold text-secondary"
            style="font-size: 50px"
          >
            <!-- <i class="flaticon-043-teddy-bear"></i> -->
            <span class="text-primary">Poshsholigim</span>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-between"
            id="navbarCollapse"
          >
            <div class="navbar-nav font-weight-bold mx-auto py-0">
              <a href="?v=home.php" class="nav-item nav-link <?= (isset($_GET['v'])&&$_GET['v']==='home.php') ? 'active' : '' ?>">Asosy</a>
              <a href="?v=about.php" class="nav-item nav-link <?= (isset($_GET['v'])&&$_GET['v']==='about.php') ? 'active' : '' ?>">About</a>
              <a href="?v=class.php" class="nav-item nav-link <?= (isset($_GET['v'])&&$_GET['v']==='class.php') ? 'active' : '' ?>">Classes</a>
              <a href="?v=team.php" class="nav-item nav-link <?= (isset($_GET['v'])&&$_GET['v']==='team.php') ? 'active' : '' ?>">O'qituvchilar</a>
              <a href="?v=galary.php" class="nav-item nav-link <?= (isset($_GET['v'])&&$_GET['v']==='galary.php') ? 'active' : '' ?>">Gallery</a>
              <a href="?v=roy.php" class="nav-item nav-link <?= (isset($_GET['v'])&&$_GET['v']==='roy.php') ? 'active' : '' ?>">royxat</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown"
                  >Pages</a
                >
                <div class="dropdown-menu rounded-0 m-0">
                  <a href="?v=blog.php" class="dropdown-item">Blog Grid</a>
                  <a href="?v=sit.php" class="dropdown-item">Blog Detail</a>
                </div>
              </div>
              <a href="?v=contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary px-4">sinfga kirish</a>
          </div>
        </nav>
    </div>
  </div>
      <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
          <h4 class="text-white mb-4 mt-5 mt-lg-0">Bolalar o'quv markazi</h4>
          <h1 class="display-3 font-weight-bold text-white">
          Bolalar ta'limiga yangi yondashuv
          </h1>
          <p class="text-white mb-4">
          </p>
          <a href="?v=home.php" class="btn btn-secondary mt-1 py-3 px-5">Koproq mlumot</a>
        </div>
        <div class="col-lg-6 text-center p-1 text-lg-right">
          <img class="img-fluid mt-3" style="max-width: 75% ; border-radius:10px; border:4px solid aqua;" src="img/IMG_20220611_202938.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- Header End -->

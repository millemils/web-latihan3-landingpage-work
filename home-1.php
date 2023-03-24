<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- JavaScript -->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
  <script src="asset/js/jquery.min.js"></script>

  <title>Let'start Works - Landing Page</title>
</head>

<body>
  <!-- Navbar Start -->
  <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="nav1">
      <a class="navbar-brand ml-5" href="#">
        <img src="asset/img/logo1.png" width="75%">
      </a>

      <!-- Hamburger Menu -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-5">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <form action="login.php" method="post">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
        </form>
      </div>
    </nav>
  </section>
  <!-- Navbar End -->

  <!-- Section Hero Start -->
  <section id="home" class="hero bg-light">
    <div class="container">
      <div class="row pt-5 pb-5 align-items-center justify-content-center justify-content-lg-between">
        <div class="col-12 col-md-6 col-lg-5">
          <h2 class="display-4 lh-1 mb-4">What are other ways to say work?</h2>
          <p class="lead fw-normal text-muted mb-5 mb-lg-0">Work is the general word for exertion of body or mind, and
            it may apply to exertion that is either easy or hard: fun work; heavy work. Drudgery suggests continuous,
            dreary, and dispiriting work, especially of a menial or servile kind: the drudgery of household tasks. Labor
            particularly denotes hard manual work: backbreaking labor; arduous labor. Toil suggests wearying or
            exhausting labor: toil that breaks down the worker’s health.</p>
        </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-end"><img src="asset/img/people-1.png" width="80%" alt="image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Hero End -->

  <!-- Section Features Start  -->
  <section id="features" class="features bg-primary">
    <div class="container">
      <div class="text pt-5 text-center text-white">
        <h2 class="display-4">What work do you want?</h2>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4 mt-5 mb-5 text-center">
          <div class="card container-fluid" style="width: 25rem;">
            <img src="asset/img/people-4.png" class="card-img-top border-bottom" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 mt-5 mb-5 text-center">
          <div class="card container-fluid" style="width: 25rem;">
            <img src="asset/img/people-6.png" class="card-img-top border-bottom" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-5 mb-5 text-center">
          <div class="card container-fluid" style="width: 25rem;">
            <img src="asset/img/people-5.png" class="card-img-top border-bottom" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Features End -->


  <!-- Section Contact Start -->
  <section id="contact">
    <div class="container mt-5">
      <h3 class="text-center">Thank you for visiting</h3>
      <div class="row mt-5 text-center">
        <div class="col-md-4 col-sm-12 mb-sm-5">
          <img src="asset/img/logo2.png" width="30%">
        </div>
        <div class="col-md-4 col-sm-12 mb-sm-5">
          <p>Let's Connect</p>
          <img src="asset/img/icon.png" width="60%">
        </div>
        <div class="col-md-4 col-sm-12 mb-sm-5">
          <p>© 2023 Works. All rights reserved.</p>
          <p>Design by Millemils.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Contact End -->

  <script>
    jQuery(document).ready(function ($) {
      $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
          $('#nav1').addClass('fixed-top');
        } else {
          $('#nav1').removeClass('fixed-top');
        }
      });
    });
  </script>
</body>

</html>
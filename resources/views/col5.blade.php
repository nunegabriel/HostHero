<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body style="background-color:#f2f4f7;">






  <!-- navbar -->
  <div class="" style="background-color:white">

    <div class="container" style="background-color:white">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="img-fluid" src="{{ asset('img/logo.png') }}" alt="" style="width:50px; height: 35px;"> Fantasy Boost
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('news1') }}">News</a>
              </li>
              <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      News
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="#">Transfers</a></li>
                      <li><a class="dropdown-item" href="#">Injuries</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Scouting and More</a></li>
                    </ul>
                  </li> -->
              <li class="nav-item">
                <!-- <a class="nav-link disabled">Link</a> -->
                <a href="{{ route('login') }}" class="nav-link">Log in</a>

              </li>
            </ul>

          </div>
        </div>
      </nav>




    </div>
  </div>

  <div class="content-wrapper">
    <div class="container">
      <div class="font-weight-bold" style="padding:10px; color:#31374f;">

        <h1 class="fw-bold"> Excepteur est proident</h1>
      </div>
      <div class="row aos-init aos-animate" data-aos="fade-up">
        <div class="col-xl-8 stretch-card grid-margin">
          <div class="position-relative">
            <figure class="figure">
              <img class="img-fluid" src="{{ asset('image/ramsdale.png') }}" alt="" width="auto"></img>
              <figcaption class="figure-caption">Ramsdale</figcaption>
            </figure>
            <div class="banner-content">
              <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                global news
              </div>

              <div class="">
                <h3 class="fw-bold"> Consectetur quis quis occaecat.</h3>

                <p>
                  Lorem ipsum fugiat occaecat dolor Lorem. Esse dolor consectetur ipsum nostrud. Nisi esse pariatur fugiat non irure elit labore sint dolor labore nostrud. Dolore id nisi enim aliquip fugiat officia mollit minim duis esse veniam ad. Reprehenderit cillum nulla excepteur anim esse eiusmod ullamco. Proident consequat tempor consequat pariatur eiusmod ut elit id veniam amet enim duis.
                </p>

                <p>
                  Lorem ipsum fugiat occaecat dolor Lorem. Esse dolor consectetur ipsum nostrud. Nisi esse pariatur fugiat non irure elit labore sint dolor labore nostrud. Dolore id nisi enim aliquip fugiat officia mollit minim duis esse veniam ad. Reprehenderit cillum nulla excepteur anim esse eiusmod ullamco. Proident consequat tempor consequat pariatur eiusmod ut elit id veniam amet enim duis.
                </p>
                <p>
                  Lorem ipsum fugiat occaecat dolor Lorem. Esse dolor consectetur ipsum nostrud. Nisi esse pariatur fugiat non irure elit labore sint dolor labore nostrud. Dolore id nisi enim aliquip fugiat officia mollit minim duis esse veniam ad. Reprehenderit cillum nulla excepteur anim esse eiusmod ullamco. Proident consequat tempor consequat pariatur eiusmod ut elit id veniam amet enim duis.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 stretch-card grid-margin">
          <!-- <div class="card bg-dark text-white"> -->
          <h2 class="fw-bold">Latest news</h2>

          <div class="card">

            <div class="card-body ">



              <div class="pa">
                Commodo sunt deserunt dolor nostrud minim nostrud et minim nisi nostrud tempor ad sunt.
              </div>


            </div>


          </div>

          <div class="card">

            <div class="card-body">





              <div class="pa">
                Commodo sunt deserunt dolor nostrud minim nostrud et minim nisi nostrud tempor ad sunt.
              </div>
            </div>


          </div>
          <div class="card">

            <div class="card-body">





              <div class="pa">
                Commodo sunt deserunt dolor nostrud minim nostrud et minim nisi nostrud tempor ad sunt.
              </div>
            </div>


          </div>










</body>

</html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
  <!-- Scripts -->
  <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>






  <!-- navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
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











  <div class="bg-image" style="
       background-image: url('{{ asset('img/Rectangle 3.png')}}');
       height: 500px;
       ">

    <div class="container">
      <div class="row align-items-center" style="color:beige">
        <div class="col-lg-5">
          <h6 class="display-4" style="color:beige; font-weight: bold" ;>WELCOME</h6>
          <p class="lead" style="color:rgb(248, 244, 250)">FantasyBay gives you team news, injury updates, gameweek
            teams and many more. We connect you
            to the Fantasy Premier League</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            <a href="{{ route('register') }}"> <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Register</button></a>
            <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> -->
          </div>
        </div>
        <div class="col-lg-7">
          <img class="img-fluid" src="{{ asset('img/fplcover2.png') }}" alt="" width="auto" style="margin-top: -40px;">
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center h-100">

    </div>
  </div>
  </div>
  <!-- Background image -->

  <div class="container mt-5" style=" padding: 0.1px">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-12">
        <div class="card mb-5" style="margin-top: -150px; background-color: rgb(235, 239, 241);">
          <div class="card-body text-center" style="background-color: rgb(235, 239, 241);">
            <h1 class="mb-4" style="color:rgb(35, 2, 55)">GAMEWEEK 20</h1>

          </div>

          <div class="row justify-content-center" style="padding:30px">
            <div class="col-md-4">
              <div class="card text-center" style=" height: 35rem;">
                <img class="card-img-top" src="{{ asset('img/salah2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5><a href="{{ route('col1') }}" class="card-title stretched-link" style="text-decoration: none; color:black;">Captaincy Picks</a></h5>

                  <p class="card-text" style="color:rgb(35, 2, 55)">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Labore assumenda aut officiis ipsum accusantium unde
                    reiciendis eos aspern</p>
                </div>
              </div>
              <br></br>
            </div>
            <div class="col-md-4">
              <div class="card text-center" style=" height: 35rem;">
                <img class="card-img-top" src="{{ asset('img/Odegaard.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5><a class="card-title stretched-link" style="color:rgb(35, 2, 55); text-decoration: none;" href="{{ route('col2') }}">Low-Budget</a></h5>
                  <p class="card-text" style="color:rgb(35, 2, 55)">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Labore assumenda aut officiis ipsum accusantium unde
                    reiciendis eos aspern</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center" style=" height: 35rem;">
                <img class="card-img-top" src="{{ asset('img/Kante.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5><a class="card-title stretched-link" style="color:rgb(35, 2, 55); text-decoration: none;" href="{{ route('col3') }}">Injury Updates</a></h5>
                  <p class="card-text" style="color:rgb(35, 2, 55)">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Labore assumenda aut officiis ipsum accusantium unde
                    reiciendis eos aspern</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-center" style="padding:30px">
            <div class="col-md-4">
              <div class="card text-center" style=" height: 35rem;">
                <img class="card-img-top" src="{{ asset('img/cancelo.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5><a class="card-title stretched-link" style="color:rgb(35, 2, 55); text-decoration: none;" href="{{ route('col5') }}">Clean Sheet Kings</a></h5>
                  <p class="card-text" style="color:rgb(35, 2, 55)">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Labore assumenda aut officiis ipsum accusantium unde
                    reiciendis eos aspern</p>
                  <!-- <a href="{{ route('col5') }}" class="btn btn-primary">Read More</a> -->
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center" style=" height: 35rem;">
                <img class="card-img-top" src="{{ asset('img/ramsdale.jpg') }}" alt="Card image cap">
                <!-- width:799px and height:591 -->
                <div class="card-body">
                  <h5><a class="card-title stretched-link" style="color:rgb(35, 2, 55); text-decoration: none;" href="{{ route('col5') }}">Shot Stoppers</a></h5>
                  <p class="card-text" style="color:rgb(35, 2, 55)">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Labore assumenda aut officiis ipsum accusantium unde
                    reiciendis eos aspern</p>
                  <!-- <a href="{{ route('col5') }}" class="btn btn-primary">Read More</a> -->
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center" style=" height: 35rem;">
                <img class="card-img-top" src="{{ asset('img/Martinelli.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <h5><a class="card-title stretched-link" style="color:rgb(35, 2, 55); text-decoration: none;" href="{{ route('col6') }}">Players to own</a></h5>
                  <p class="card-text" style="color:rgb(35, 2, 55)">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Labore assumenda aut officiis ipsum accusantium unde
                    reiciendis eos aspern</p>
                  <!-- <a href="{{ route('col6') }}" class="btn btn-primary">Read More</a> -->
                </div>
              </div>
            </div>
          </div>



          <!-- GAMEWEEK Team -->

          <div class="container">
            <div class="card" style="padding:30px;">
              <h1 class="mb-4 d-flex justify-content-center" style="color:rgb(35, 2, 55)">GAMEWEEK 21 SQUAD REVEAL</h1>
              <div class="row">
                <div class="col-md-6">
                  <img class="card-img-top" src="{{ asset('img/fpl.png') }}" alt="Card image cap"><br></br>

                </div>
                <div class="col-md-6">
                  <p class="card-text" style="color:rgb(35, 2, 55)">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Nulla mollitia numquam hic alias nam ullam odit molestias, velit itaque,
                    sit explicabo tempora consectetur eos exercitationem dignissimos inventore illo
                    ! Tempore, magnam.
                  </p>
                  <a href="{{ route('col7') }}" class="btn btn-primary">Read More</a>


                </div>
              </div>
            </div>
          </div>






        </div>
      </div>
    </div>

  </div>
  <div class="max-w-3xl mx-auto text-sm text-gray-500 text-center h-full flex" style= "padding:30px"><h6 class="m-auto"> © FantasyBoost All rights reserved.</h6></div>
</body>

</html>
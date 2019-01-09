<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fahrradtouren in Paderborn - Spontan cruisen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.6.2-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" integrity="sha256-2k1KVsNPRXxZOsXQ8aqcZ9GOOwmJTMoOB5o5Qp1d6/s=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="css/landing.css">
</head>
<body>
  <section class="hero is-info is-fullheight">
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item" href="../">
              <img src="bike.png" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenu" class="navbar-menu">

             @if (Route::has('login'))
                <div class="navbar-item links">
                    @auth
                        <a class="button is-white is-outlined" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="button is-white is-outlined" href="{{ route('login') }}">Login</a>
                        <a class="button is-white is-outlined" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
              <!-- <div class="navbar-end">
                           <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-home"></i>
                  </span>
                  <span>Home</span>
                </a>
              </span>
                           <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-superpowers"></i>
                  </span>
                  <span>Examples</span>
                </a>
              </span>
              <span class="navbar-item">
                <a class="button is-white is-outlined" href="#">
                  <span class="icon">
                    <i class="fa fa-book"></i>
                  </span>
                  <span>Documentation</span>
                </a>
              </span>
              <span class="navbar-item">
                <a class="button is-white is-outlined" href="https://github.com/dansup/bulma-templates/blob/master/templates/landing.html">
                  <span class="icon">
                    <i class="fa fa-github"></i>
                  </span>
                  <span>View Source</span>
                </a>
              </span>
          </div> -->
        </div>
      </nav>
    </div>

    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
          <h1 class="title">
            Coming Soon
          </h1>
          <h2 class="subtitle">
            Hier entsteht die Organisationsplattform für spontante Fahrradtouren in Paderborn.
          </h2>
          <div class="box">
            
           
            <div class="typeform-widget" data-url="https://efimi.typeform.com/to/dGC2kP" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=dGC2kP&utm_source=typeform.com-7078196-Basic&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>

          </div>
        </div>
      </div>
    </div>

  </section>
  <script async type="text/javascript" src="js/bulma.js"></script>
</body>
</html>
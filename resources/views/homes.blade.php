<html>
    <body>
        <title>welcom</title>
        <head>  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
            <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
            <script src='https://kit.fontawesome.com/a076d05399.js'></script>
            <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
            <!-- Plugin CSS --></head>
            <link href="css/creative.min.css" rel="stylesheet">

<style>
                html body .heading {
  text-align: center;
  color: #2e5266;
  margin-bottom: 3rem;
}

html body .heading h1 { margin-bottom: 0; }

html body .heading h6 { margin: 0; }

html body .heading p { margin: 0; }

html body .heading a {
  color: #2e5266;
  display: inline-block;
}

html body .heading a .fab {
  margin-right: 0.5rem;
  font-size: 1.5rem;
  padding: 0.5rem;
  margin-top: 0.5rem;
}
   .bg-light {
    background-color: 
    #222 !important;
      }
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 80%;
      }
  .bg-light {
    background-color: 
    #161717 !important;
       }
       .im{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
            </style>
            
            <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
                <div class="container">
                  <a class="navbar-brand js-scroll-trigger" href="#page-top">LOGO</a>
                  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href='{!! url('/'); !!}'>HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href='{!! url('/accomodation'); !!}'>ACCOMMODATION</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">ACTIVITIES</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href='{!! url('/gallery'); !!}'>GALLERY</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">RESTAURAN</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href='{!! url('/contactus'); !!}'>CONTACT USA</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href='{!! url('/contactus'); !!}'>LOGOUT</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href='{!! url('singouts'); !!}'>LOGOUT</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <h1>welcom</h1>
              <h1>
                 {{Auth::user()->name}} 
              </h1>
         <a href="{{ route('singouts')}}">Logout</a>
            
        
    </body>
</html>
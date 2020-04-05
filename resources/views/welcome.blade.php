<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Turtle Paradise</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
      
  }
 



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

.card-carousel {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
 
}

.card-carousel .my-card {
  height: 20rem;
  width: 12rem;
  position: relative;
  z-index: 1;
  -webkit-transform: scale(0.6) translateY(-2rem);
  transform: scale(0.6) translateY(-2rem);
  opacity: 0;
  cursor: pointer;
  pointer-events: none;
  background: #2e5266;
  background: linear-gradient(to top, #2e5266, #6e8898);
  transition: 1s;
}

.card-carousel .my-card:after {
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  border-radius: 100%;
  background-color: rgba(0,0,0,0.3);
  bottom: -5rem;
  -webkit-filter: blur(4px);
  filter: blur(4px);
}

.card-carousel .my-card:nth-child(0):before {
  content: '0';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(1):before {
  content: '1';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(2):before {
  content: '2';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(3):before {
  content: '3';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(4):before {
  content: '4';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(5):before {
  content: '5';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(6):before {
  content: '6';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(7):before {
  content: '7';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(8):before {
  content: '8';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card:nth-child(9):before {
  content: '9';
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  font-size: 3rem;
  font-weight: 300;
  color: #fff;
}

.card-carousel .my-card.active {
  z-index: 3;
  -webkit-transform: scale(1) translateY(0) translateX(0);
  transform: scale(1) translateY(0) translateX(0);
  opacity: 1;
  pointer-events: auto;
  transition: 1s;
}

.card-carousel .my-card.prev, .card-carousel .my-card.next {
  z-index: 2;
  -webkit-transform: scale(0.8) translateY(-1rem) translateX(0);
  transform: scale(0.8) translateY(-1rem) translateX(0);
  opacity: 0.6;
  pointer-events: auto;
  transition: 1s;
}
.container-fluid{
  background-color:#ccc;
  margin-top: 10%;
}
.im{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.imc{
  height: 20rem;
  width: 12rem;
}
bg-light {
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
  </style>
<body id="page-top">
  <div id="preloder">
    <div class="loader"></div>
</div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">LOGO</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href='{!! url('/accomodation'); !!}'>ACCOMMODATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">ACTIVITIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">GALLERY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">RESTAURAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href='{!! url('/contactus'); !!}'>CONTACT USA</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Turtle Paradise</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Tangalle district </p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">BOOKING NOW</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h2 class="text-white mt-0">Turtle Paradise</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Set in the Tangalle Beach district of Tangalle, Turtle Paradise is a 1-minute walk from the beach and Rekawa turtle watching camp. Showcasing a sun terrace and views of the Rekawa lagoon, the property is just 45.1 km from Mirissa and 41.8 km from Udawalawe. Free private parking is available on site.
           Turtle Paradise offers accommodation with air-conditioned rooms. Certain rooms feature a sitting area to relax in after a busy day. All rooms are fitted with a private bathroom equipped with a bathtub or shower. For your comfort, you will find bathrobes, slippers and free toiletries.
            The on-site restaurant offers à la carte dishes, which guests can enjoy anytime and anywhere on the property. Also, guests can enjoy traditional Sri Lankan meals at the in-house restaurant or grab a drink at the bar. The hotel offers laundry services.
            Bike rental and car rental are available at this hotel and the area is popular for biking, fishing and canoeing.
            Hambantota is 32.2 km while Matta Rajapaksa International airport is 61 km away from the property. The Turtle Paradise is 87.3 km away from the Yala National Park and 18.5 km from the Kalametiya Bird Sanctuary.
             </p>
         <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>-->
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <!--<section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class='fas fa-bath' style='font-size:100px;color:#f4623a'></i>
            <h3 class="h4 mb-2">Sturdy Themes</h3>
            <p class="text-muted mb-0">Smolle description</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class='fas fa-bed' style='font-size:100px;color:#f4623a'></i>
            <h3 class="h4 mb-2">Up to Date</h3>
            <p class="text-muted mb-0">Smolle description</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class='fas fa-coffee' style='font-size:48px;color:red'></i>
            <h3 class="h4 mb-2">Resturent</h3>
            <p class="text-muted mb-0">Smolle description</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2">Made with Love</h3>
            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--====================================Carousel Image============================================--->
  <div id="demo" class="carousel slide" data-ride="carousel" style="top:50px;">
   <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/tru.jpg" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/food.jpg" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/na.jpg" alt="New York" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/ta.jpg" alt="New York" width="1100" height="500">
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  <!-- Portfolio Section -->
  <!--<section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="images/kc.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="images/bg1.jpg">
            <img class="img-fluid" src="images/kc.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="images/bg1.jpg">
            <img class="img-fluid" src="images/kc.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="images/kc.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="images/kc.jpg">
            <img class="img-fluid" src="images/kc.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="images/.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>-->

  <!-- Call to Action Section -->
  <div class="container" style="top:50px;">
   <div class="row">
    <div class="col-sm-6" style="top:50px;">
      <img src="images/kc.jpg" style="width:100%;"class="im">
      </div>
  <div class="col-sm-6" style="top:50px;">
      <p>Turtle Paradise, Is home to one of the most important sea turtle nesting sites in Sri Lanka, visited by five different species which lay their eggs in the sand here every night throughout the year. The best time to see turtles is when there's a full moon. Fullish moon too are good throughout the year, because there are both more turtles & more light to see them by. Rekawa has recorded 23 turtles in one night. We will definitely see at least a couple of turtles every night. We wait long hours in the pitch black beach. At last, one arrives in the midnight crawling across the beach, away from sea. It leaves, on its path, a remarkable trail which looks as if a one-wheeled tractor has driven straight up out to the sea. It's an agonizingly slow crawl of exhausting half an hour by a creature not adapted to the land. Having reached the top of the beach, the turtle then spend about another 45 minutes digging an enormous hole. Silence of the midnight is broken by periodic thrashing & sound of great clouds of sand being scuffed up. As the turtle begins to lay eggs, we can get close to watch, although all we could see is the turtle's backside with eggs-looking just like ping-pong balls-periodically popping out in twos & threes. The turtle then rests, fills in the hole & eventually crawls back down to the sea. It's an epic effort, the sight of which makes the whole evening-long experience worthwhile. In the absence of government sponsored project, the turtle eggs are then taken to be re-buried in a secure location, by the villagers who make a basic living from entertaining tourists. These creatures have acted as a rare bridge between marine & terrestrial ecosystems for 100 million years, enriching both as they steadfastly undertake their remarkable two-realm life cycle. We refuse to buy eggs for consumption. We refuse to buy turtle products.  </p>
    </div>
  </div></div></div>
  <!--====================================Carousel slide==================================--->
  
    <script type="text/javascript"
    src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script></div>
    <div class="jquery-script-clear"></div>
    </div>
    </div>
    
    <div class="container-fluid">
    <div class="card-carousel">
      <div class="my-card"><img src="images/bg4.jpg" class="imc"><h5>Deluxe Single Room</h5></div>
      <div class="my-card"><img src="images/bg8.jpg" class="imc"><h5>Deluxe Double Room</h5></div>
      <div class="my-card"><img src="images/bg8.jpg" class="imc"><h5>Deluxe Triple Room</h5></div></div>
      
    </div></div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script> 
    <script>
    $num = $('.my-card').length;
    $even = $num / 2;
    $odd = ($num + 1) / 2;
    
    if ($num % 2 == 0) {
      $('.my-card:nth-child(' + $even + ')').addClass('active');
      $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
      $('.my-card:nth-child(' + $even + ')').next().addClass('next');
    } else {
      $('.my-card:nth-child(' + $odd + ')').addClass('active');
      $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
      $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
    }
    
    $('.my-card').click(function() {
      $slide = $('.active').width();
      console.log($('.active').position().left);
      
      if ($(this).hasClass('next')) {
        $('.card-carousel').stop(false, true).animate({left: '-=' + $slide});
      } else if ($(this).hasClass('prev')) {
        $('.card-carousel').stop(false, true).animate({left: '+=' + $slide});
      }
      
      $(this).removeClass('prev next');
      $(this).siblings().removeClass('prev active next');
      
      $(this).addClass('active');
      $(this).prev().addClass('prev');
      $(this).next().addClass('next');
    });
    
    
    // Keyboard nav
   
    </script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Contact Us</h2>
          <hr class="divider my-4">
        
        </div>
      </div>
      <div class="row">
        
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          
          <i class="fab fa-facebook-f fa-3x mb-3 text-muted" style="color:#0099ff;"></i>
          <div>facebook</div>
        </div>
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fab fa-whatsapp fa-3x mb-3 text-muted"></i>
          <div>whatsapp</div>
        </div>
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>
        </div>
       
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">pawerd by &copy; abcd (pvt).Ltd</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>

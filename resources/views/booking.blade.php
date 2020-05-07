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
  <link rel="stylesheet" type="text/css" href="../css/jquery.datetimepicker.min.css"/>
  <script src="../js/jquery.datetimepicker.js"></script>
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
  <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
  <meta name="author" content="Codrops" />
  <link rel="shortcut icon" href="../favicon.ico"> 
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/style3.css" />
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
</head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="csss/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<style>
  html body .heading a {
    color: #2e5266;
  
  }
  body{
    
  
      box-sizing: border-box;
              width: 100%;
              height: 150px;
              padding: 3px;
              height: 100%;
     background-position: center center;
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: cover;
        
  }
  
  table,td,th {
    margin-left: auto;
      margin-right: auto;
      color:#242323;
   
      margin-bottom: 1rem; 
      text-align:left; 
     font-size:10pt; 
     width: 20%;
     
     
  }
  .btn{
    background-color:  #f1c40f ;
    border: none;
    color: #2c3e50;
  }
  .btn:hover{
    color: #fff;
  }
  .about-main{
    background-color:#ffffff; 
  }
   </style>
<body>
 
  <!-- Navigation -->
 

  <!-- Masthead -->
  <body>
    <div id="banner" class="banner full-screen-mode parallax">
      <div class="container pr">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="banner-static">
                  <div class="banner-text">
                      <div class="banner-cell">
                        <h1>Turtle Paradise  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Hotel" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                        <h2>Tangalle</h2>
                      </div> 
                      </div>     
                  <!-- end banner-text -->
              </div>
              <!-- end banner-static -->
          </div>
          <!-- end col -->
      </div>
      <!-- end container -->
  </div>
  <div id="about" class="about-main pad-top-100 pad-bottom-100">
    <div class="container">
        
      <table class="table table-bordered">
        <thead>
        
          <tr>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Room</th>
            <th>Price</th>
            <th>Night</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $row)
          <tr>
            <form action="{{ route('custmer')}}" method="POST">
              {{ csrf_field() }} 
          <td style="display:none;"><input type="text" value="{{ $row->roomid}}" name="id"></td>
          <td>{{ $row->sdate }}</td>
          <td>{{ $row->edate}}</td>
          <td>{{ $row->rooms_type }}</td>
          <td>USD &nbsp; {{ $row->price }}</td>
          <td>{{ $row->numnight }}</td>
          <td>{{ $row->Status }}</td>
          <td><!--<a  href='//{//!! url('/custmer'); !!}'> <button type="submit" style="background-color:#ffff00;border:none; color:#4d4d4d;"class="btn btn-primary"> BOOKING
         
          </button></a>-->
          <input type="submit" value="CONTINU" class="btn btn-info"> </td>
         
        </form>
          </tr>
         @endforeach
        
       
        </tbody>
      </table>

                 </div>
                </div>
                   
              </p> 
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end reservations-main -->

<div id="footer" class="footer-main">
  
      <!-- end container -->
  </div>
  <!-- end footer-news -->
  <div class="footer-box pad-top-70">
    
          
                  <div class="footer-logo">
                      <div class="text-center">
                          <img src="images/logo.png" alt="" />
                          <h1 style="color:#f0c507;">Contact Us</h1>
                          <div class="icon-bar">
                          <div class="row">
                            <div class="col-md-3">
                              <a  href="#"><i class="fab fa-facebook-f" style="color: white;font-size: 36px;"></i></a> 
                            </div>
                            <div class="col-md-3">
                              <a href="#"><i class="fab fa-whatsapp" style="color: white;font-size: 36px;"></i></a>
                            </div>
                            <div class="col-md-3">
                              <a href="#" class="active"><i class="fa fa-envelope" style="color: white;font-size: 36px;"></i></a> 
                            </div>
                            <div class="col-md-3">
                              <a href="#"><i class="fa fa-phone" style="color: white;font-size: 36px;"></i></a>
                            </div>
                           
                           
                          </div> 
                      </div>
                  
                 
                
             
          <!-- end row -->
      </div>
      <!-- end container -->
      <div id="copyright" class="copyright-main">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h6 class="copy-title"> Copyright &copy; 2017 Food Funday is powered by <a href="#" target="_blank"></a> </h6>
                  </div>
              </div>
              <!-- end row -->
          </div>
          <!-- end container -->
      </div>
      <!-- end copyright-main -->
  </div>
  <!-- end footer-box -->
</div>
<!-- end footer-main -->
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->

  <!-- About Section -->
</body>
  <!-- ALL JS FILES -->

</html>

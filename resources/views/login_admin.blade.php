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
  .container {
   
    text-align:left;
}
 .btn{
     background-color:#f58c65; 
     border:#f58c65 ;
 }
 .btn:hover{
    background-color:#de430a; 
    border:#de430a;
 }
 .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
 margin-top:10px; 
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
        <div class="row">
             <div class="col-sm-6" style="background-color:#ffffff;">
              
              <form  method="post" action="{{ route('lo')}}">
                {{ csrf_field() }} 
              <div class="form-group" style="margin-top:5%;">
                  <i class="fa fa-user" style='font-size:150px;color:#ccc;margin-left:39%;'></i>
                  <h3>LOGIN</h3>
              
                  
                  <label>USER</label>
                  <input type="text" class="form-control" value="" name="email">
                  <span class="help-block"></span>
              </div>    
              <div class="form-group">
                  <label>Password</label>
                  <input type="password"  class="form-control" name="password">
                  <span class="help-block"></span>
              </div>
              
              <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Login">
              </div>
              <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
              
          </form></div>
          
              <div class="col-sm-6" style="background-color:#fff;">
                   <form action="{{ route('sin')}}" method="post">
                    {{ csrf_field() }} 
                    <div class="form-group" style="margin-top:10%;">
                      <div class="row">
                        @if (count($errors) > 0)
                         <div class="alert alert-danger">
                             <ul>
                                 @foreach ($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif</div>
                     @if (session()->has('message'))
                     <div class="alert alert-success">
                         {{session ()->get ('message')}}
                         </div>  
                     @endif
                      <label>NAME</label>
                         <input type="text" name="name" class="form-control" value="">
                         <span class="help-block"></span>
                     </div> 
                 <div class="form-group">
                  <label>EMAIL</label>
                     <input type="email" name="email" class="form-control" value="">
                     <span class="help-block"></span>
                 </div> 
                 <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="password" name="password" class="form-control" value="">
                  <span class="help-block"></span>
              </div>   
              <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
              <button type="submit" class="btn btn-primary" name="save">SAVE</button>
            </div>
            </div>
         
            </div>
          </div>
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
                              <a href="#"><i class="fa fa-phone" style="color: white;font-size: 36px;" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"></i></a>
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

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

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
  <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
  <meta name="author" content="Codrops" />
  <link rel="shortcut icon" href="../favicon.ico"> 
  
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
</head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 
<!-- Inline CSS based on choices in "Settings" tab -->


<style>
html body .heading a {
  color: #2e5266;

}
body{
    background-image:url("images/gallary/bg.jpg");
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
html body .heading a .fab {
  margin-right: 0.5rem;
  font-size: 1.5rem;
  padding: 0.5rem;
  margin-top: 0.5rem;
 
}
ul.cb-slideshow{
    list-style-type: none;
}


.container > header {
    padding: 156px 30px 10px 20px;
    margin: -5px 22px 10px 20px;
    position: relative;
    display: block;
    text-align: left;
}
table,td,th{
  text-align:left; 
  width: 50%;
  color:#fff;
}
.table {
    width: 50%;
    margin-bottom: 1rem;
    color: #212529;
    background: rgba(11, 89, 224, 0.37);
    display: block;
    margin-left: auto;
    margin-right: auto;
}
#mainNav {
    box-shadow: none;
    background-color: #d55110e6;
}

#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}


.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }
        img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
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
        </ul>
      </div>
    </div>
  </nav>

  <!------ Include the above in your HEAD tag ---------->
  
    <!-- Page Content -->
    <div class="container page-top">
      <div class="row">
          <!--//=======================first image row========================--->
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/vb.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/vb.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/ab7.jpg"  class="fancybox" rel="ligthbox">
                    <img  src="images/ab7.jpg" class="zoom img-fluid"  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/ab6.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/ab6.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/bg10.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/bg10.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <!--=================================Second Image row======================--->
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/nbc.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/nbc.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/tru.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/tru.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/tu.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/we.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/ab9.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/ab9.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <!-------===============================therd row=========================--->
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/bg2.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/bg2.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/bg3.jpg"  class="fancybox" rel="ligthbox">
                    <img  src="images/bg3.jpg" class="zoom img-fluid"  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/bg4.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/bg4.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="images/ab1.jpg" class="fancybox" rel="ligthbox">
                    <img  src="images/ab1.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <!--=====================================End of gallary==========================--->
             </div>
          </div>
<script>
    $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    
</script>
</body>

</html>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>




<style>
html body .heading a {
  color: #2e5266;

}
body{
 width: 100%;
 background-image:url("images/bec.jpg");
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
            <a class="nav-link js-scroll-trigger" href='{!! url('/accomodation'); !!}''>ACCOMMODATION</a>
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
  <div class="container">
        <h2 style="margin-top:10%;color:#fff;">Booking</h2>
        <p style="color:#222;">Booking Now Your Rooms</p>            
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>RoomType</th>
              <th>Avalible</th>
              <th>Price</th>
              <th>Rooms</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($booking as $booking)
             <tr>
             <td>{{$booking->id}}</td>
              <td>{{$booking->rooms_type}}</td>
              <td>{{$booking->status}}</td>
              <td>{{$booking->price}}</td>
              -<td><img src="{{('images/icon/'. $booking->images)}}" height="80" width="80"></td>
              <td><a  href='{!! url('/custmer'); !!}'> <button type="submit" style="background-color:#ffff00;border:none; color:#4d4d4d;" class="btn btn-primary">
                BOOKING
              </button></a></td>
              <!--<td><img src="store_image/fetch_image/{//{//$booking->images}}"height="200" width="200"></td>-->
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
     
  
</body>

</html>



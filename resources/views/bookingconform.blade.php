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
  

 
</head>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<!-- Special version of Bootstrap that is isolated to content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
<link rel="stylesheet" type="text/css" href="../css/jquery.datetimepicker.min.css"/>
<script src="../js/jquery.datetimepicker.js"></script>
<style>
body{
 font-size:11pt; 
}
label{
    color:#555;
     margin-top: 2px; 
     margin-left:10px; 
   
}
h3{
    text-align:center;
}
.bg-light {
    background-color: #161717 !important;
    margin-top:10px; 
}
 </style>
<body id="page-top">
  <div id="preloder">
    <div class="loader"></div>
</div>
  <!-- Navigation -->
  <header>
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
            <a class="nav-link js-scroll-trigger" href="#services">ACCOMMODATION</a>
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
</header>
<header>
  <div class="container" style="margin-top:5%;width:800px;max-width:100%;background-color:#f2f4f4;">
        <img src="images/food.jpg" class="img-fluid" style="margin-top:2%;">
        <label style="margin-top:8%;">Booking Reference Number:</label>
        <form style="margin-top:2%;" action="{{ route('bookr')}}" method="POST">
          @foreach($datas as $row)
          {{ csrf_field() }} 
            <div class="form-row">
            <div class="col-md-6">
              <label for="inputZip">CHECK IN</label> 
              <input type="text" class="form-control" name="checkin" placeholder="CHECK IN" value="{{ $row->sdate}}">
              </div>
              <div class="col-md-6">
                <label for="inputZip">CHECK OUT</label>
                <input type="text" class="form-control" name="checkout" placeholder="CHECK OUT" value="{{ $row->edate}}">
              </div>
              <div class="col-md-12">
              <div class="form-group">
                <label>BOOKING BY</label>
                <input type="text" class="form-control"  name="name" value="{{ $row->name}}">
                <span class="help-block"></span>
            </div>
              </div>
              <div class="col-md-6">
                <label for="inputZip">ROOMS</label>
                <input type="text" class="form-control" placeholder="Last name" name="room" value="{{ $row->rooms_type}}">
              </div>
              <div class="col-md-6">
                <label for="inputZip">PRICE</label> 
                <input type="text" class="form-control" name="price" value="{{$row->price}}">
              </div>
              <div class="col-md-6">
                <label for="inputZip">ADULTS</label>
                <input type="text" class="form-control" name="adults" value="{{$row->adults }}">
              </div>
              <div class="col-md-6">
                <label for="inputZip">CHILDREN</label> 
                <input type="text" class="form-control" name="children" value="{{$row->children }}">
              </div>
              <div class="col-md-6">
                <label for="inputZip">Cuntry</label>
                <input type="text" class="form-control" name="cuntry" value="{{$row->cuntry  }}">
              </div>
              <div class="col-md-6">
                <label for="inputZip">City</label> 
                <input type="text" class="form-control" name="city" value="{{$row->city}}">
              </div>
              <div class="col-md-6">
                <label for="inputZip">Email</label>
                <input type="text" class="form-control" name="email" value="{{$row->email}}">
              </div>
              <div class="col-md-6">
                <label for="inputZip">Phone Number</label> 
                <input type="text" class="form-control" name="phone" value="{{$row->phonenumber}}">
              </div>
              <span class="help-block"></span>
              </div>
              <div class="col-md-12" style="display:none;">
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id" value="{{$id}}" class="form-control">
                  <span class="help-block"></span>
              </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <input type="submit" name="save" class="btn btn-primary" value="BOOKING">
                </div>
            </div>
            @endforeach
     </form>
    </div>
    <script type="text/javascript">
       </script>
    <footer class="bg-light py-5">
        <div class="container">
          <div class="small text-center text-muted">pawerd by &copy; abcd (pvt).Ltd</div>
        </div>
      </footer>
</header>
</body>
</html>

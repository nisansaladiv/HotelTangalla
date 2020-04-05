<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link href="css/creative.min.css" rel="stylesheet">
<style>
body, html {
  height: 100%;
  margin: 0;
  color: #2e5266;
  background: url('images/ab3.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
.needs-validation{
  margin-top: 5%;
}
.icon-bar {
  width: 90px;
 
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 36px;
  
}

.icon-bar a:hover {
  background-color:#ffcc00;
}

.active {
  background-color:#3399ff;
}
</style>
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
</head>
<body>
  <!-- Page Content -->
  <div class="container" style="margin:0;position:absolute;top:55%;left:50%; -ms-transform: translate(-50%, -50%); 
  transform: translate(-50%, -50%);">
 <div class="row">
          <div class="col-6" style=" background: url('images/ab8.jpg');">
            <!--<img src="images/ab8.jpg" width="600px;" height="500px;" style="opacity: 0.6;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            -->
            <h1 style="text-align:center;">CONTACT US</h1>
            <div class="icon-bar">
              <a  href="#"><i class="fab fa-facebook-f"></i></a> 
              <a href="#"><i class="fab fa-whatsapp"></i></a>
              <a href="#" class="active"><i class="fa fa-envelope"></i></a> 
              <a href="#"><i class="fa fa-phone"></i></a>
              <a href="#"><i class="fa fa-map-marker"></i></a> 
            </div>
            
          </div>
          <div class="col-6" style="background-color:#fff;">
            <form class="needs-validation" novalidate>
              <div class="form-row">
                <div class="col-md-10 mb-2">
                  <label for="validationTooltip01">First name</label>
                  <input type="text" class="form-control" id="validationTooltip01" placeholder="Name" value="" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div> 
                <div class="col-md-10 mb-2">
                  <label for="validationTooltip01">Email</label>
                  <input type="email" class="form-control" id="validationTooltip01" placeholder="Email" value="" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-10 mb-2">
                  <label for="validationTooltip01">Comment</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
               </div>
               
              <button class="btn btn-primary" type="submit">SEND</button>
            </form>
        </div>
       </div>
</body>
</html>

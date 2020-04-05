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

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
<link rel="stylesheet" type="text/css" href="../css/jquery.datetimepicker.min.css"/>
<script src="../js/jquery.datetimepicker.js"></script>
<style>
html body .heading a {
  color: #2e5266;

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
.form-control{
    
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;

    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.btn{
    margin-top: 15%;
}
.la{
    color: #fff;
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
            <a class="nav-link js-scroll-trigger" href="{!! url('/accomodation'); !!}">ACCOMMODATION</a>
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

  <!-- Masthead -->
  <body id="page">
    <ul class="cb-slideshow">
        <li><span></span><div><h3></h3></div></li>
        <li><span></span><div><h3></h3></div></li>
        <li><span></span><div><h3></h3></div></li>
        <li><span></span><div><h3></h3></div></li>
        <li><span></span><div><h3></h3></div></li>
        <li><span></span><div><h3></h3></div></li>
    </ul>
    <div class="container">
   <!-- Codrops top bar -->
        <div class="codrops-top">

            <span class="right">
               
            </span>
            <div class="clr"></div>
        </div><!--/ Codrops top bar -->
        <header>
    <p class="codrops-demos">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
              </ul>
           </div>
          @endif
         <div class="container">
                  <form action="{{ route('singup')}}" method="POST">
                    <div class="row">
               
                    <div class="col-lg-2">
                      <label for="exampleFormControlFile1" class="la">Check in</label>
                      <input type="text" id="datet2" readonly="true" name="sdate" class="form-control" required>
                          </div>
                     <div class="col-lg-2">
                        <label for="exampleFormControlFile1" class="la">Check Out</label>
                        <input type="text" id="work" readonly="true" name="edate" class="form-control" required>
                            </div>
                   
                      <div class="col-lg-2">
                        <label for="exampleFormControlFile1" class="la">Number of Nights</label>
                        <input class="form-control" type="text" placeholder="Number of Nights" name="num_night">
                        </div>
                      <div class="col-lg-2">
                        <label for="exampleFormControlFile1" class="la">Adults</label>
                        <input class="form-control" type="text" placeholder="Adults" name="adults">
                        </div>
                      <div class="col-lg-2">
                        <label for="exampleFormControlFile1" class="la">Children</label>
                        <input class="form-control" type="text" placeholder="Children" name="childr">
                        </div>
                            <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary mb-2" name="save"> Checking</button>
                        {{ csrf_field() }} 
                      </div>
                     
                      </div>
                    </form>
                </div>
             
              </p> 
        </header>
        
    </div>
    <div class="container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Sleeps</th>
            <th>Room type</th>
            <th>Prices</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><i class="fas fa-user-alt"  style='font-size:25px;color:orange'><i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i></td>
            <td><a href="#" style="color:#1af2e5 ;">Standard Double Room </a><br>1 extra-large double bed  </td>
            <td><button type="submit" class="btn btn-primary mb-2" style="background-color:#ffff00;border: #ffff00; color:#4d4d4d;"> Prices</button></td>
          </tr>
          <tr>
            <td><i class="fas fa-user-alt"  style='font-size:25px;color:orange'><i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i><i class="fas fa-user-alt"  style='font-size:25px;color:orange'><i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i>+<i class="fas fa-user-alt"  style='font-size:25px;color:orange'><i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i></td>
            <td><a href="#" style="color:#1af2e5 ;">Family Room with Balcony</a> <br>2 extra-large double beds or 1 single bed and 1 double bed 
          </td>
            <td><button type="submit" class="btn btn-primary mb-2" style="background-color:#ffff00;border: #ffff00; color:#4d4d4d;"> Prices</button></td>
          </tr>
          <tr>
            <td><i class="fas fa-user-alt"  style='font-size:25px;color:orange'><i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i><i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i></td>
            <td><a href="#" style="color:#1af2e5 ;">Deluxe Double Room with Balcony</a><br> 1 extra-large double bed 
              </td>
            <td><button type="submit" class="btn btn-primary mb-2" style="background-color:#ffff00;border: #ffff00; color:#4d4d4d;"> Prices</button></td>
          </tr>
          <tr>
            <td><i class="fas fa-user-alt"  style='font-size:25px;color:orange'><i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i><i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i>+<i class="fas fa-user-alt"  style='font-size:25px;color:orange'></i></td>
            <td><a href="#" style="color:#1af2e5 ;">Triple Room</a> <br>1 single bed and 1 extra-large double bed 
              
              </td>
            <td><button type="submit" class="btn btn-primary mb-2" style="background-color:#ffff00;border: #ffff00; color:#4d4d4d;"> Prices</button></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="container" style="background:rgba(0, 123, 128, 0.77);">
      <h2 style="color:#fff;margin-top:10px;">Rooms Type</h2>
     
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="/images/bg4.jpg" target="_blank">
              <img src="/images/bg4.jpg" alt="Lights" style="width:100%">
              <div class="caption">
                <p>Standard Double Room </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="/images/bg4.jpg" target="_blank">
              <img src="/images/bg4.jpg" alt="Lights" style="width:100%">
              <div class="caption">
                <p>Family Room with Balcony</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="/images/bg4.jpg" target="_blank">
              <img src="/images/bg4.jpg" alt="Lights" style="width:100%">
              <div class="caption">
                <p>Deluxe Double Room with Balcony</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="/images/bg4.jpg" target="_blank">
              <img src="/images/bg4.jpg" alt="Lights" style="width:100%">
              <div class="caption">
                <p>Triple Room</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript">
  $(document).ready(function () {
//DatePicker Example
$('#datetimepicker').datetimepicker();
                
$('#datetimepic2').datetimepicker();
                  
});
</script>
<script type="text/javascript">
  $(document).ready(function () {
//minDate and maxDate Example
$('#datetimepicker3').datetimepicker({
   format:'Y-m-d',
   timepicker:false,
});
                  $('#datet2').datetimepicker({
   format:'Y-m-d',
   timepicker:false,
});
                   $('#work').datetimepicker({
   format:'Y-m-d',
   timepicker:false,
  });
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
//DatePicker Example
$('#date1').datetimepicker();
                        });
</script>
  <!-- About Section -->
</body>

</html>

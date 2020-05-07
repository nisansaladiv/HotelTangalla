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
  
   
}

h3{
    text-align:center;
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
  <div class="container" style="margin-top:10%;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
 
    <div class="row">
      <div class="col-sm-6" style="background-color: #2c3e50 ;">
        <i class="fa fa-user" style='font-size:200px;color:#ccc;margin-left:39%;margin-top:20%;'></i>
        <label style='font-size:44pt;margin-left:15%;'>Turtle Paradise</label> 
        <label style='font-size:36pt;margin-left:20%;'>Turtle Paradise</label> 
        <!--<form  method="post" action="{//{ route('homes')}}">
          {//{ csrf_field() }} 
        <div class="form-group" style="margin-top:5%;">
            <i class="fa fa-user" style='font-size:150px;color:#ccc;margin-left:39%;'></i>
            <h3>LOGIN</h3>
            <label>Email</label>
            <input type="email" name="email"class="form-control" value="">
            <span class="help-block"></span>
        </div>    
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label>Conform Password</label>
            <input type="password" name="pass" class="form-control">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        
    </form>--></div>
    
        <div class="col-sm-6" style="background-color:#fff;">
             <form action="{{ route('sing')}}" method="post">
              {{ csrf_field() }} 
      
            
              <div class="form-group" style="margin-top:10%;">
               <label>Full Name</label>
               <input type="text" name="username"class="form-control" value="">
               <span class="help-block"></span>
           </div> 
           <div class="form-group">
            <label>Cuntry</label>
            <input type="text" name="cuntry"class="form-control" value="">
            <span class="help-block"></span>
        </div>   
        <div class="form-group">
            <label>City</label>
            <input type="text" name="city"class="form-control" value="">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address"class="form-control" value="">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="ponenumber"class="form-control" value="">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email"class="form-control" value="">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input type="text" id="datet2" readonly="true" name="birth" class="form-control" required>
  
            <span class="help-block"></span>
        </div>

        <div class="form-group">
          <label>ID</label>
        <input type="text" name="id" class="form-control" value="{{$id}}" readonly="true">
          <span class="help-block"></span>
      </div>
          <!-- <div class="form-group" style="display:none;">
               <label>Password</label>
               <input type="password" name="password" class="form-control" value="user@123">
               <span class="help-block"></span>
           </div>

           <div class="form-group" style="display:none;">
            <label>Conform Password</label>
            <input type="text" name="cpass" class="form-control">
            <span class="help-block"></span>
        </div>-->
           <div class="form-group">
               <input type="submit" class="btn btn-primary" value="Submit">
           </div>
     
           <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
      </div>
    </div>
  </div>
    
        </header>
        
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

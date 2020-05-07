<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-light bg-light">
                            <a class="navbar-brand" href="#">
                              <img src="images/icon/da.png" width="50" height="30" class="d-inline-block align-top" alt="">
                              Bootstrap
                            </a>
                        <a href="{{route('sinup')}}"><input type="button" value="LOGOUT" class="btn btn-dark" style="background-color:#faa805;border:none;"></a>
                          </nav>
                        
                    </div>
                </div>
            </div>
            <style>
            .img-fluid{
                margin-top:10%; 
            }
            .border {
    display: inline-block;
    width:100%;
    height: 70px;
    margin: 6px;
  
  }
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;

}
  .bg-light {
    background-color: #e6ce118c !important;
}
.page-footer {
    background-color: #e6ce118c !important;
}
span{
    text-align: center;
  
}
 </style>
        <div class="container">
            <div class="row">
             <img src="images/admin.png" class="center">
            </div>
            <h5 style="text-align: center;color:#b0afaf;">{{Auth::user()->name}}</h5> 
            </div>
            <div class="container">
                <div class="row">
                    <span class="border border-primary">
                    <h1 style="text-align: center;">Admin Dashbord</h1>
                    </span>
                </div>
            </div>
        <div class="container">
        <div class="row">
      
        
        <div class="col-md-3" style="text-align:center;">
            <a href="{{route('new_room')}}"> <img src="images/icon/room.png" class="img-fluid" width="460" height="345">
            </a>
         <h5>ADD ROOM</h5>
        </div>
        <div class="col-md-3" style="text-align:center;">
            <a href="{{route('acco')}}"><img src="images/icon/aco.png" class="img-fluid" width="460" height="345">
          </a>
          <h5> ACCOMADATION</h5>
        </div>
        <div class="col-md-3" style="text-align:center;">
            <a href="{{route('rev')}}"><img src="images/icon/re.png" class="img-fluid" width="460" height="345"></a>
           <h5>RESERVATION</h5>
           
        </div>
        <div class="col-md-3" style="text-align:center;">
            <a href="#"> <img src="images/icon/rep.png" class="img-fluid" width="460" height="345"></a>
          <h5>REPORTS</h5>
        
        </div>
    </div>
    </div>
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      
      </footer>
        </body>
    </head>
</html>
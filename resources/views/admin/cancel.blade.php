<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
            <body>
                <style>
                     .bg-light {
                      background-color: #e6ce118c !important;
                        }
                        .page-footer {
                      background-color: #e6ce118c !important;
                    }
                </style>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-light bg-light">
                                <p class="navbar-brand">
                                  <img src="images/icon/da.png" width="50" height="30" class="d-inline-block align-top" alt="">
                                  Bootstrap
                                  
                                </p>
                            <a href="{{route('sinup')}}"><input type="button" value="LOGOUT" class="btn btn-dark" style="background-color:#faa805;border:none;"></a>
                              </nav>
                            
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h1>Edit</h1>
                   <form action="{{route('errors',$troom->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }} 
                        <div class="form-group">
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
                   <div class="row">
                    <div class="col">
                   <label for="exampleInputPassword1">Check In</label>
                   <input type="text" class="form-control" value="{{$troom->checkin}}" name="checkin">
                   </div>
                   <div class="col">
                    <label for="exampleInputPassword1">Check Out</label>
                   <input type="text" class="form-control" value="{{$troom->checkout}}" name="checkout">
                   </div>
                   </div>
                    <div class="row">
                    <div class="col">
                   <label for="exampleInputPassword1">Room</label>
                   <input type="text" class="form-control" value="{{$troom->room}}" name="room">
                   </div>
                   <div class="col">
                    <label for="exampleInputPassword1">Name</label>
                   <input type="text" class="form-control" value="{{$troom->name}}" name="name">
                   </div>
                   </div>
                    <div class="row">
                    <div class="col">
                   <label for="exampleInputPassword1">Price</label>
                   <input type="text" class="form-control" value="{{$troom->children}}" name="price">
                   </div>
                   <div class="col">
                    <label for="exampleInputPassword1">Adults</label>
                   <input type="text" class="form-control" value="{{$troom->adults}}" name="adults">
                   </div>
                   </div>
                   <div class="row">
                    <div class="col">
                   <label for="exampleInputPassword1">Children</label>
                   <input type="text" class="form-control" value="{{$troom->children}}" name="children">
                   </div>
                   <div class="col">
                    <label for="exampleInputPassword1">Cuntry</label>
                   <input type="text" class="form-control" value="{{$troom->cuntry}}" name="cuntry">
                   </div>
                   </div>
                   <div class="row">
                    <div class="col">
                   <label for="exampleInputPassword1">City</label>
                   <input type="text" class="form-control" value="{{$troom->city}}" name="city">
                   </div>
                   <div class="col">
                    <label for="exampleInputPassword1">Email</label>
                   <input type="text" class="form-control" value="{{$troom->email}}" name="email">
                   </div>
                   </div>
                   <div class="row">
                    <div class="col">
                   <label for="exampleInputPassword1">Phone</label>
                   <input type="text" class="form-control" value="{{$troom->phone}}" name="phone">
                   </div>
                   <div class="col">
                    <label for="exampleInputPassword1">Status</label>
                   <input type="text" class="form-control" value="{{$troom->status}}">
                   <input type="text" class="form-control" value="{{$troom->userid}}" name="uid" style="display: none;">
                   </div>
                   </div>
                   <div class="row">
                    <div class="col">
                  <input  type="submit" class="btn btn-success" style="margin-top:10px;" value="Submit">
                   </div>
                  
                   </div>
                    </form>
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
        </title>
    </head>
</html>
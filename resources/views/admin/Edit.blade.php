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
                   
                    <form action="{{route('upa')}}" method="post">
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
                            <div class="col-md-6">
                            <label for="exampleFormControlSelect1">Rooms Type </label>
                            <input type="text" class="form-control" name="id" id="formGroupExampleInput" value="{{$troom->id}}" style="display:none;" >
                            <input type="text" class="form-control" name="room" id="formGroupExampleInput" value="{{$troom->rooms_type}}" >
                          </div></div>
                        <div class="form-group">
                            <div class="col-md-6">
                            <label for="formGroupExampleInput">Accomodation</label>
                            <input type="text" class="form-control" name="aco" id="formGroupExampleInput" placeholder="Example input" value="{{$troom->accomadation}}">
                          </div>
                        </div>
                          <div class="form-group">
                            <div class="col-md-6">
                            <label for="formGroupExampleInput2">Description</label>
                            <input type="text" name="des" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value="{{$troom->num_person}}">
                          </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-6">
                            <label for="formGroupExampleInput2">Number of Person</label>
                            <input type="text" name="nper" class="form-control" id="formGroupExampleInput2" placeholder="Another input" value="{{$troom->num_person}}">
                          </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-6">
                            <label for="formGroupExampleInput2">Price</label>
                            <input type="text" class="form-control" name="price" id="formGroupExampleInput2" placeholder="Another input" value="{{$troom->price}}">
                          </div>
                          </div>
                         
                          <div class="form-group row">
                            <div class="col-sm-10">
                             <input type="submit" name="save" value="UPDATE" class="btn btn-primary">
                            </div>
                          </div>
                    </form>
                   
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
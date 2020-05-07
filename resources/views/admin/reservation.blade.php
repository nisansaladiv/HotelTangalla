<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<title></title>
<body>
    <style>
        body{
            font-size: 12px;
        }
        .glyphicon-eye-open{
            color:#fa5a05;  
            font-size:18pt; 
        }
        .glyphicon-pencil{
            color:#212f3d;  
            font-size:18pt; 
        }
        .glyphicon-trash{
            color:#f74b39;  
            font-size:18pt; 
        }

    </style>
<h1>ABC</h1>
<div class="container">
<table class="table table-bordered">
    <thead>
    
        <th>ID</th>
        <th>CheckIn</th>
        <th>CheckOut</th>
        <th>Rooms</th>
        <th>Name</th>
        <th>Price</th>
     
        <th>Adults</th>
        <th>Children </th>
        <th>Cuntry</th>
        <th>City</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Action</th>
        
    </thead>
    <tbody>
        @foreach($aco as $aco)
        <tr>
        <td>{{$aco->id}}</td>
        <td>{{$aco->checkin}}</td>
        <td>{{$aco->checkout}}</td>
        <td>{{$aco->room}}</td>
        <td>{{$aco->name }}</td>
        <td>USD {{$aco->price }}</td>
        <td>{{$aco->adults}}</td>
        <td>{{$aco->children}}</td>
        <td>{{$aco->cuntry}}</td>
        <td>{{$aco->city}}</td>
        <td>{{$aco->email}}</td>
        <td>{{$aco->phone}}</td>
        <td>{{$aco->status}}</td>
        <td><form action="{{action('UserControllers@AdminAco',$aco->id)}}" method="POST"></form>
        <a href="conforme/{{$aco->id}}"><span class='glyphicon glyphicon-saved'></span></a>
        <a href="cancel/{{$aco->id}}"><span class='glyphicon glyphicon-remove'></span></a>
        
         <!--<button type="submit"><span class='glyphicon glyphicon-trash'></span></button>-->
    </td>   
        
    </tr>
        @endforeach
    </tbody>
</div>
</table>
</body>
</head>
</html>
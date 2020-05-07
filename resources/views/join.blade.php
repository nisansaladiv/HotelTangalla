
<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Laravel 5.8 - Join Multiple Table</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
     <div class="container">    
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
        <table class="table table-bordered">
          <thead>
          
            <tr>
              <th>Check In</th>
              <th>Check Out</th>
              <th>Room</th>
              <th>Price</th>
              <th>Night</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
              <form action="{{ route('custmer')}}" method="POST">
                {{ csrf_field() }} 
            <td style="display:none;"><input type="text" value="{{ $row->id }}" name="id"></td>
            <td>{{ $row->sdate }}</td>
            <td>{{ $row->edate}}</td>
            <td>{{ $row->rooms_type }}</td>
            <td>USD &nbsp; {{ $row->price }}</td>
            <td>{{ $row->numnight }}</td>
            <td>{{ $row->Status }}</td>
            <td><!--<a  href='//{//!! url('/custmer'); !!}'> <button type="submit" style="background-color:#ffff00;border:none; color:#4d4d4d;"class="btn btn-primary"> BOOKING
           
            </button></a>-->
            <input type="submit" value="CONTINU" class="btn btn-primary"> </td>
           
          </form>
            </tr>
           @endforeach
     </div>
    </body>
   </html>
   
   
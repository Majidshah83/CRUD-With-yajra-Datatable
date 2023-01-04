
<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
   <form action="{{route('student-update')}}" method="Post">
    @csrf
  <div class="form-row">
     <div class="form-group col-md-6">
    <input type="hidden" name="id" value="{{$students->id}}">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" value="{{$students->name}}" name="name" id="inputEmail4" placeholder="name">
    </div>
    <div class="form-group col-md-6">
      <label >Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" value="{{$students->email}}">
    </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">User Name</label>
    <input type="text" class="form-control" name="username" id="inputAddress" value="{{$students->username}}" placeholder="username">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="text" class="form-control" name="phone" id="inputAddress2" value="{{$students->phone}}" placeholder="PHONE">
  </div>
<div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="date" class="form-control" name="dob"  value="{{$students->dob}}" id="inputAddress2" placeholder="dob">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>

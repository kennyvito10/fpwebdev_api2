<!doctype html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">

</head>
<body>
  <a href="{{ url('/logout') }}"><button  class="btn btn-primary">Logout</button></a>
  <a href="{{ url('/adminloggedin') }}"><button  class="btn btn-primary">View Sales</button></a>
</body>
</html>
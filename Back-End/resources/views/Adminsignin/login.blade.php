@extends('master.master')

@section('dynblock')
<body>

</br>
<h1 style="text-align:center;">Login</h1>
<div class="container">
<div class="row">
    <div col="col-6">
<form method="post" action="{{ route('logins') }}">



    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @csrf
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="name" class="form-control p_input" >
  </div>
  <div class="form-group">
    <label>Password *</label>
    <input type="password" name="password" class="form-control p_input">
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary btn-block enter-btn"><a href="admin_profile"> Log In</a></button>
  </div>

  <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
</form>


</div>  <!-- /col -->
<div col="col-6"></div>  <!-- /col -->

</div> <!-- /row -->
</div> <!-- /tontainer -->




</body>
@stop
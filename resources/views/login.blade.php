@extends('layout')
@section('title','login')
@section('content')

<div class="container mb-4">
<!-- <section class="vh-80" style="background-color: #9A616D;"> -->

<div class="mt-5">
        @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif
        @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
    </div>
   
    <div class="row">
    <div class="col-lg-6 ">
      <img src="https://media.istockphoto.com/id/1225158028/photo/bike-repair-young-man-repairing-motobike-in-garage-mechanic-fixing-motocycle-engine-serious.webp?b=1&s=170667a&w=0&k=20&c=D_6zw7zVMCOL_gvzZLB2PuBRk1rgZAUcJNaMoL0m2y4=" alt="image">

    </div>
    <!-- </div> -->
    <div class="col-lg-6">
<form action="{{route('login.post')}}" method="POST" class ="ms-auto me-auto mt-auto  border-none " style = "width:500px; height:350px">
  @csrf
  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; ">Sign into your account</h5>
  <div class="mb-4">
    <!-- <label  class="form-label">Email address</label> -->
    <input type="email" class="form-control " name="email" placeholder="Email address" >
    
  </div>
  
  <div class="mb-4">
    <!-- <label  class="form-label">Password</label> -->
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="mb-4">
  <button type="submit" class="btn btn-primary "style="width:500px">Login</button>
  </div>
  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="registration"
                      style="color: #393f81;">Register here</a></p>
</form>
<!-- </section> -->
</div>
</div>
</div>

@endsection
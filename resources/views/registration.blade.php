@extends('layout')
@section('title','registration')
@section('content')
<div class="container">
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
    <div class="col-lg-6">
        <img src="https://media.istockphoto.com/id/1084092090/photo/people-are-repairing-a-motorcycle.webp?b=1&s=170667a&w=0&k=20&c=IFjbfpaK8aIh1eYoXWrfIcBb2QIUa1M7c3d8M8vUNjM=" alt="bike-image">
    </div>
    <div class="col-lg-6">
    <form action="{{route('registration.post')}}" method="POST" class ="ms-auto me-auto mt-auto" style = "width:500px">
    @csrf  
    <div class="mb-3">
    <label  class="form-label">Fullname</label>
    <input type="text" class="form-control" name="name">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
</div>
@endsection
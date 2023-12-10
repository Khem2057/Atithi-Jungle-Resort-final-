@extends('frontend.layouts.main')
@section('main-container')

<link rel="stylesheet" href="{{asset('frontend/css/signin.css')}}">
  

<div class="signin_section">
    <img src="img/signin.png" alt="image">
    <div class="signin_container">
            <p class="sign_in"><br>Sign in</p> 
            <form action="/signin-register" method="post">
              @csrf 
                <div>
                    <label for="" class="info">Email</label><br>
                    <input type="text" name="email" value="{{old('email')}}">
                    <span id="error" class="text-danger">
                     @error('email')
                        {{$message}}
                    @enderror
                </span>
                </div>
                <div>
                    <label for="" class="info">Password</label><br>
                    <input type="password" name="password" value="{{old('password')}}">
                    <span id="error" class="text-danger">
                     @error('password')
                        {{$message}}
                    @enderror
                </span>
                </div>
               
                <label for="" class="forget_password"><a href="">Forget password?</a></label> <br><br>
                <div class="signin_box">
                    <button type="submit" class="btn btn-primary">Sign in</button> &nbsp;&nbsp; <label for="" class="btn_signup">or &nbsp; <a href="{{url('/signup')}}"><span>Sign up</span> </label></a>
                </div>
            </form>
    </div>
</div>


@endsection
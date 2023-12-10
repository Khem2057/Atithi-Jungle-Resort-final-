@extends('frontend.layouts.main')
@section('main-container')

<link rel="stylesheet" href="{{asset('frontend/css/signup.css')}}">


<div class="signin_section">
    <img src="img/signin.png" alt="image">
    <div class="signin_container">
            <p class="sign_up"><br>Sign up</p>
            <form action="/signup-store" method="post">
              @csrf 
                <div>
                <label for="" class="info">Username</label><br>
                <input type="text" name="username"  value="{{old('username')}}" >
                <span id="error" class="text-danger">
                     @error('username')
                        {{$message}}
                    @enderror
                </span>
                </div>
                <div>
                <label for="" class="info">Email</label><br>
                <input type="email" name="email"  value="{{old('email')}}" >
                <span id="error" class="text-danger">
                     @error('email')
                          {{$message}}
                      @enderror
               </span>
                </div>
                <div>
                <label for="" class="info">Contact</label><br>
                <input type="number" name="contact" value="{{old('contact')}}" >
                <span id="error" class="text-danger">
                     @error('contact')
                         {{$message}}
                     @enderror
                 </span>
                </div>
                <div>
                <label for="" class="info">Password</label><br>
                <input type="password" name="password"  >
                <span id="error" class="text-danger">
                   @error('password')
                      {{$message}}
                   @enderror
                </span>
                </div>
                <div>
                <label for="" class="info">Confirm Password</label><br>
                <input type="password" name="confirmpassword"  >
                <span id="error" class="text-danger">
                    @error('confirmpassword')
                        {{$message}}
                     @enderror
                </span>
                </div>
                <div class="signup_box">
                  <button type="submit" class="btn btn-primary">Sign up</button> &nbsp;&nbsp; <label for="" class="btn_signin">or &nbsp; <a href="{{url('/signin')}}"><span class="sign_in">Sign in</span> </label></a>
                </div>
                </form>
    </div>
</div>


@endsection
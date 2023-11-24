@extends('layouts.app')
<style>


</style>

@section('content')
<div class="container-fluid" >


    <div class="row">
        <div class=" d-none d-sm-block col-md-6" id='id' ></div>

        <div class="contain  col-12 col-md-6 container bg-white" >
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="text-center" style="margin-top:20vh">
                    <img src="{{url('images/logo.png')}}" alt="" class="img-fluid" style="height:8vh">
                    <div> <h4>Create New Account</h4></div>
                    <div class='mt-3'><a href="#" class='text-black-50'>Click <span class='text-danger'>here</span> to add your referrer if you were referred to join skillznet</a></small></div>
                </div>
                <div class='container'>
                    <div class="d-md-flex input-contain">
                        <div class="input-group m-1 text-center">

                            <span class="input-group-text"><i class='fa fa-user'></i></span><input type="text" class="form-control @error('first_name') is-invalid @enderror" name ='first_name' placeholder="FIRST NAME" id='first_name' value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="FIRST NAME">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="input-group m-1">


                        <span class="input-group-text"><i class='fa fa-user'></i></span> <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="LAST NAME">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        </div>
                        <div class="d-md-flex input-contain">
                            <div class="input-group text-center m-1">

                        <span class="input-group-text"><i class='fa fa-user'></i></span> <input type="text" class="form-control @error('username') is-invalid @enderror" name ='username' id='username' value="{{ old('username') }}" required autocomplete="last_name" placeholder="USER NAME">

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror</div>

                            <div class="input-group m-1">
                                @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="input-group-text"><i class='fa fa-envelope'></i></span>  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL">
                            </div>
                            </div>
                            <div class="d-md-flex input-contain">
                                <div class="input-group text-center m-1">

                                    <span class="input-group-text"><i class='fa fa-lock'></i></span> <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="PASSWORD">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                                </div>

                                <div class="input-group m-1">
                                    <span class="input-group-text"><i class='fa fa-lock'></i></span> <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="co-password" placeholder="CONFIRM PASSWORD">
                                </div>
                                </div>
                                <div class= 'input-contain'>
                                    <input type="checkbox" name="confirm" id="check" class='form-check-inline'><span class='text w-50'>I have accepted Skillznet <span style="color: orange" required>Terms and Conditions</span></span>

                                </div>
                                <div class='form-group input-contain'>
                                <button  class='form-control text-white mr-5' style="background-color:navy">Register now</button>
                                <p class='danger text-center mt-3'><a href="{{route('login')}}"><strong class="text-danger">Already a user? Sign in.</strong></a></p>

                                </div>


                </div>

            </form>









        </div>



    </div>

</div>

@endsection


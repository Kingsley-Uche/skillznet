@extends('layouts.app')

@section('content')

<div class="container-fluid" >



    <div class="row">
        <div class=" d-none d-sm-block col-md-6" id='id' ></div>

        <div class="contain  col-12 col-md-6 container bg-white" >
            <div class="text-center" style="margin-top:20vh">
                <img src="{{url('images/logo.png')}}" alt="" class="img-fluid" style="height:8vh">
                <div class='m-4'> <h5> PASSWORD RESET</h5></div>

            </div>


            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="d-md-flex input-contain login">
                    <div class="input-group text-center m-1">
                        @error('user_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="input-group-text"><i class='fa fa-user'></i></span> <input type="email" class="form-control" name ='email' placeholder="EMAIL">
                    </div>


                    </div>
                    <div class='form-group input-contain login'>
                        <button  class='form-control text-white mr-5' style="background-color:navy">  {{ __('Send Password Reset Link') }}</button>


                        </div>


            </form>



            <p class='danger text-center mt-3'><a href="{{route('login')}}"><strong class="text-danger">Already a user? Sign in.</strong></a></p>



        </div>



    </div>

</div>

@endsection

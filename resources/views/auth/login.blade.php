@extends('layouts.app')

@section('content')
<div class="container-fluid" >



    <div class="row">
        <div class=" d-none d-sm-block col-md-6" id='id' ></div>

        <div class="contain  col-12 col-md-6 container bg-white" >
            <div class='fa-pull-right'><a href="{{route('register')}}" class='btn btn-primary'>CREATE ACCOUNT <i  class="fa fa-chevron-right text-small"> </i></a></div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="text-center" style="margin-top:20vh">
                    <img src="{{url('images/logo.png')}}" alt="" class="img-fluid" style="height:8vh">
                    <div class='m-4'> <h5> ACCOUNT LOGIN</h5></div>
                    @if ($errors->has('username'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first('username') }}
                    </div>
                @endif

                </div>
                <div class='container'>

                        <div class="d-md-flex input-contain login">
                            <div class="input-group text-center m-1">
                                @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="input-group-text"><i class='fa fa-user'></i></span> <input type="text"  @error('username') is-invalid @enderror name="username" value="{{ old('username') }}" class="form-control" placeholder="USER NAME">
                            </div>


                            </div>
                            <div class="d-md-flex input-contain login">
                                <div class="input-group text-center m-1">

                                    <span class="input-group-text"><i class='fa fa-lock'></i></span> <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="PASSWORD">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                                </div>


                                </div>

                                <div class='form-group input-contain login'>
                                <button  class='form-control text-white mr-5' style="background-color:navy">SIGN IN</button>
                                <p class='danger text-center mt-3'><a href="{{route('password.request')}}"><strong class="text-danger">Forgot your password? </strong></a></p>

                                </div>


                </div>

            </form>









        </div>



    </div>

</div>


@endsection




























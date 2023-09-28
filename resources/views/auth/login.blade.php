@extends('layouts.app')
@section('content')

@endsection
<div class="container">
    <div class="row">
        <div class="offset-md-4 col-md-4">
            <div class="form-holder card">
                <div class="card-body">
                    <h1>Login Here!</h1>
                    @if(Session::has('error'))
                        <p class="text-danger">{{Session::get('error')}}</p>
                    @endif
                    @if(Session::has('success'))
                        <p class="text-danger">{{Session::get('success')}}</p>
                    @endif

                    <form action="{{route('login')}}" method="post">
                        @csrf 
                        @method('post')
                        <div class="form-group">
                                <label for="">User_ID:-</label>
                                <input type="text" name="email" id="" class="form-control" placeholder="User_ID is your Email..." aria-describedby="helpId">
                                @if($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Password:-</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="Password" aria-describedby="helpId">
                                @if($errors->has('password'))
                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                            <div class="row">
                                <div class="text-left col-8">
                                    <a href="#" class="btn btn-link">Forgot Password</a>
                                </div>
                                <div class="text-right col-4">
                                    <input type="submit" class="btn-primary btn" value="Login">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

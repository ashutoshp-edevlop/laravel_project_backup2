@extends('layouts.app')
@section('content')


<div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                <div class="form-holder card">
                    <div class="card-body">
                        <h1>Register Here!</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{Session::get('error')}}</p>
                        @endif

                        <form action="{{route('register')}}" method="post">
                            @csrf 
                            @method('post')
                            <div class="form-group">
                                <label for="">Name:-</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                @if($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Email:-</label>
                                <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                @if($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Mobile No.:-</label>
                                <input type="text" name="mobile" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                @if($errors->has('mobile'))
                                    <p class="text-danger">{{$errors->first('mobile')}}</p>
                                @endif
                            </div> -->
                            <div class="form-group">
                                <label for="">Password:-</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                @if($errors->has('password'))
                                    <p class="text-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password:-</label>
                                <input type="password" name="confirm_password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="row">
                                <div class="text-left col-8">
                                    <a href="#" class="btn btn-link">Forgot Password</a>
                                </div>
                                <div class="text-right col-4">
                                    <input type="submit" class="btn btn-primary" value="Register">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>
    
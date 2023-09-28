@extends('layouts.app')
@section('content')
<h1>Home Page: <br>
Welcome, {{Auth::User()->name}}</h1>

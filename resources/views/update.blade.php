@extends('Layout.app')
@section('title','update')
@section('content')
<form method="POST" action="{{ route('update', Request::route('id')) }}">
@csrf
    <input type="text" name="name" value="{{$students->name}}" placeholder="Name">
    <input type="text" name="email" value="{{$students->email}}" placeholder="email">
   
   
    <input type="submit" value="Update">
    
</form>
@endsection
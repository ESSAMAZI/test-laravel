@extends('Layout.app')
@section('title','News App')
@section('content')
<h1> Hello from const div</h1>
<p> Hello from const div</p>
<p> print x={{$x}} </p>
    @if($x==15)
    <p>yes x==15 </p>
    
    @elseif ($x==10)
    <p>yes x == 15 </p>
    @else
    <p>no</p>
    @endif
<br>
switch
<br>

    @switch($x)
        @case(15)
             <p>yes x is {{$x}} </p>
            @break
     @case(10)
            <p>yes x is {{$x}} </p>
            @break
        @default
        <p>no x the is {{$x}} </p>
            
    @endswitch

    <br>
    loop
    <br>
    @for ($i=1;$i<=5;$i++)
      {{$i}} 
      <br> 
    @endfor
    <br>
    foreach 
<br>
@foreach ($users as $user)
    {{$user}}<br>
@endforeach


<br>
    while 
<br>
@while ($x<=20)
    {{$x++}}
@endwhile

<br>
include 
<br>
@include('Layout.nav')
<br>
code php 
<br>
@php
    $number=10;
    echo 'number = '.$number;
@endphp
{{-- //comments --}}
@endsection
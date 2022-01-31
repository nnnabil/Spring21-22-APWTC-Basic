@extends('layouts.app')
@section('content')

<h1>Wlcome to your profile</h1>
<h2> {{$name}}</h2>
<h2> {{$id}}</h2>
<h2> {{$dob}}</h2>

<ul>
@foreach($names as $n)
    <li>{{$n}}</li>
@endforeach
</ul>

@endsection

@extends('layouts.app')
@section('content')
    <table class="table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Date of Birth</th>
            <th>Action</th>

        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->id}}</td>
            <td>{{$student->dob}}</td>
            <td><a href="/studentEdit/{{$student->id}}/{{$student->name}}">Details</a></td>

        </tr>
        @endforeach
        
    </table>
@endsection
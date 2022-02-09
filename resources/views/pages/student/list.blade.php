@extends('layouts.app')
@section('content')
    <table class="table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Action</th>

        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->student_id}}</td>
            <td>{{$student->email}}</td>
            <td><a href="/studentEdit/{{$student->id}}/{{$student->name}}">Edit</a></td>
            <td><a href="/studentDelete/{{$student->id}}/{{$student->name}}">delete</a></td>

        </tr>
        @endforeach
        
    </table>
@endsection
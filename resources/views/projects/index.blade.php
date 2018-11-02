@extends('projects.layout')

@section('content')
    <h1>Projects:</h1>
    <ul>
        @foreach($projects as $project)
            <li>
                {{$project->id}}: {{$project->title}}
                <a href="/projects/{{$project->id}}/edit">edit</a>
            </li>
        @endforeach
    </ul>
    <a href="projects/create" class="btn btn-outline-primary">Add new</a>
@endsection
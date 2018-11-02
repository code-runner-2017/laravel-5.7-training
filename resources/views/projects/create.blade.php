@extends('projects.layout')

@section('content')
    <h1>Create a new Project:</h1>

    <form action="/projects" method="post" class="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="projectTitle">Title</label>
            <input type="text" name="title" placeholder="project title" class="form-control" id="projectTitle">
        </div>

        <div class="form-group">
            <label for="projectDesc">Description</label>
            <input type="text" name="description" placeholder="project description" class="form-control" id="projectDesc">
        </div>
        <div>
            <button type="submit" class="btn btn-outline-primary">Create</button>
        </div>
    </form>
@endsection

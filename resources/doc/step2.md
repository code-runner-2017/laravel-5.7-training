# Creating the controller

- use artisan to create a new controller:


    php artisan make:controller ProjectsController
    
- setup routing in `routes/web.php`:


    Route::get('/projects/json', 'ProjectsController@indexJson');
    Route::get('/projects', 'ProjectsController@index');

We have setup two different routing methods: one that returns a json with all projects, another
that returns a HTML page with all projects. See the implementation in `ProjectsController`.

Here is how we retrieve all projects and pass them to the view:

    $projects = Project::all();
    return view('projects')->withProjects($projects);

- define a new view `resources/views/projects.blade.php`. Here is the iteration on all projects:


    <ul>
        @foreach($projects as $project)
            <li>{{$project->id}}: {{$project->title}}</li>
        @endforeach
    </ul>
    
- open the following URLs in your browser:


    http://laravel-5.7-training.test/projects/json
    http://laravel-5.7-training.test/projects
    
To get the JSON and HTML views.


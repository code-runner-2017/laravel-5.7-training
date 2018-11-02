- replace the single routes with the resource shortcut:
```
    Route::resource('projects', 'ProjectsController');
``` 
and list the available routes:

    php artisan route:list 
    
If we pass `-r` when we generate a controller, it also generates the right methods in the controller.

- we add the `layout.blade.php` with Bootstrap 4.1.3 and change the old views to use this common layout

- we create the `project.edit` blade view

 
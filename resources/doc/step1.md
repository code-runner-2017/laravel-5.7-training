# Setup database

- edit `.env` and configure DB_* keys according to your environment.
  You can use mysql, postgresql, sqlite or any other database. Just check your php configuration
  to verify that you have the needed extensions.
  
  Make sure that the `DB_CONNECTION` value matches one of the values in the `connections`
  array defined in `config/database.php`.
  For example, if you are using postgresql, you must set `DB_CONNECTION=pgsql`
  
- start the dbms

-  start a XAMPP shell in the project directory and run:

    php artisan migrate
    
If you have the needed php extensions enabled and you have configured your .env correctly you
should see:

    Migration table created successfully.
    Migrating: 2014_10_12_000000_create_users_table
    Migrated:  2014_10_12_000000_create_users_table
    Migrating: 2014_10_12_100000_create_password_resets_table
    Migrated:  2014_10_12_100000_create_password_resets_table
    
You database contains now 3 tables (`users`, `password_resets` and `migrations`).
The `migrations` table is used by laravel for incremental schema updates.

- create a migration and a model:
```
    php artisan make:migration create_projects_table
    php artisan make:model Models\Project
```

- edit `database/migrations/*_create_projects_table.php` to add a title and description to our project:

    $table->increments('id');
    $table->string('title');
    $table->text('description');
    $table->timestamps();
    
- run:
```
    php artisan migrate 
```

so that the database is updated with the new colunms.

# Seeding the database

We use the `faker` package to generate random data to seed the projects table.  

    php artisan make:seeder ProjectsSeeder
    composer require fzaninotto/faker
    composer dump-autoload
    
- change `ProjectSeeder.php` to use faker (see)

Finally run the command to seed the dbms (ALL DATA WILL BE ERASED!): 

    php artisan db:seed
    
Your table should contain 30 random records.
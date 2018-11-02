<?php

use Illuminate\Database\Seeder;
use \App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Project::truncate();

        foreach(range(1,30) as $index)
        {
            Project::create([
                'title' => $faker->text(128),
                'description' => $faker->text(300),
            ]);
        }
    }
}

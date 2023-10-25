<?php

namespace Database\Seeders;

use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_projects = config('projects');
        
        foreach($_projects as $_project) {

            $project = new Project();
            $project->name = $_project['name'];
            $project->slug = Str::slug($project->name);
            $project->description = $_project['description'];
            $project->repository = $_project['repository'];
            $project->save();

        }
     }
}
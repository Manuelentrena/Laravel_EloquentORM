<?php

namespace App\Http\Controllers;

/* use App\Project; */

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Project;

class ProjectController extends Controller
{

    public function index()
    {
        // Laravel's ->chunk() method applies an incrementing id to all chunked items. 
        // When converting to JSON, this is an issue because JavaScript does not allow 
        // arrays to start with offset key values (not starting with 0), 
        // therefore they must be defined as objects.

        try {
            /* $dataList = Project::where('is_active', '=', 2)->firstOrFail(); */
            $dataList = Project::all()->chunk(10, function ($projects) {
                foreach ($projects as $project) {
                    $project;
                }
            });

            //Convert to Objects
            /* foreach ($dataList as $key => $data) {
                return $dataList[$key] = array_values($data->toArray());
            } */

            //Convert to ARRAY
            $dataList = $dataList->map(function ($data) {
                return $data = $data->values();
            });

            return $dataList;
        } catch (ModelNotFoundException $e) {
            dd($e);
        }
    }

    public function firstTwoDesactived()
    {
        $projects = Project::where('is_active', 0)->orderBy('name', 'ASC')->take(2)->get();
        return $projects;
    }

    public function lastestTenProjects()
    {
        $projects = Project::orderBy('execution_date', 'ASC')->take(10)->get();
        return $projects;
    }


    public function insertProject()
    {
        $project = new Project;
        $project->city_id = 1;
        $project->company_id = 1;
        $project->user_id = 1;
        $project->name = 'Nombre del proyecto';
        $project->budget = 1000.00;
        $project->execution_date = '2020-04-30';
        $project->is_active = 1;
        $project->save();

        return "Guardado";
    }

    public function changedNameProyects()
    {
        Project::where('is_active', 0)->update(['name' => 'Nombre Nuevo ❤']);
        return "Nombre actualizados";
    }

    public function show(Project $project)
    {
        //
    }


    public function update(Request $request, Project $project)
    {
        //
    }


    public function destroy(Project $project)
    {
        //
    }
}

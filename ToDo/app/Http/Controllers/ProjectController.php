<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\project;
use App\Models\toDoList;

class ProjectController extends Controller
{
    public function show(){
        
        $project = project::all();
        return view('todolist', compact('project'));

    }

    public function showProject($id){

        $to_do_list = toDoList::all()->where('project_id', '=', $id);
        $project = project::all()->where('id', '=', $id)->first();
        $project_id = $id;
        return view('project.todolists', compact('to_do_list', 'project_id', 'project'));
    }

    public function showCreate(){
        
        return view('project.create');
    }

    public function doAddNewProject(Request $request){
        $user_id = Auth::id(); 

        $request->validate([
            'project_naam' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        project::create([
            'name' => $request->input('project_naam'),
            'done' => '0',
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'user_id' => $user_id,
        ]);

        return redirect('/todolist');
    }

}

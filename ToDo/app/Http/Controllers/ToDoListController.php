<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\project;
use App\Models\toDoList;

class ToDoListController extends Controller
{
    public function showCreate($id){
        
        $project_id = $id;
        return view('todolist.create', compact('project_id'));

    }

    public function showToDoList($id){
        $toDoList_id = $id;

        $to_do_list = project::all()->where('id', '=', $toDoList_id)->first();
        $to_do_list_items = toDoList::all()->where('to_do_list_id', '=', $toDoList_id);
        

        return view('todolist.todolistitems', compact('toDoList_id', 'to_do_list', 'to_do_list_items'));
    }


    public function doAddNewToDoList(Request $request){
        $user_id = Auth::id(); 
        $project_id = $request->input('project_id');

        $request->validate([
            'to_do_list_naam' => 'required',
            'project_id' => 'required',
        ]);

        toDoList::create([
            'name' => $request->input('to_do_list_naam'),
            'done' => '0',
            'project_id' => $project_id,
            'user_id' => $user_id,
        ]);

        return redirect('/project/' .$project_id. '');
    }

}


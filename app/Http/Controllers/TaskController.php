<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function createTask(Request $request){
        // Validation des données  
       $fiels = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        // $task = new Task($fiels);
        // eloquent
        Task::create($fiels);

    }
    
    
}

<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'task' => 'required'
        ]);

        if($request->hasFile('image')){
            $img = uniqid().'.jpg';
            $request->image->move('photos',$img);
            Task::create([
                'name' => request('name'),
                'task' => request('task'),
                'image' => $img,
                'user_id' => Auth::id()
            ]);

        }else{
            Task::create([
                'name' => request('name'),
                'task' => request('task'),
                'user_id' => Auth::id()
            ]);
        }

        return redirect()->route('data.show');

    }

    public function show()
    {
        //dd(Auth::check());
        $allData = User::find(Auth::id())->tasks()->get();
        $username = Auth::user()->name;

        return view('welcome',compact(['allData','username']));
    }

    public function edit($id)
    {
        $data = Task::find($id);
        return view('update',compact('data'));
    }

    public function update($id)
    {
        $this->validate(request(),[
            'name' => 'required',
            'task' => 'required'
        ]);

        Task::find($id)->update([
            'name' => request('name'),
            'task' => request('task')
        ]);

        return redirect()->route('data.show')->with('updateSuccess','Updated Sucessfully');
    }

    public function delete($id)
    {
        Task::find($id)->delete();
        return redirect()->route('data.show');
    }
}

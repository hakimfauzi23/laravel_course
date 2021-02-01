<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lists = ToDoList::all();
        return view('lists.all', ['lists' => $lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('lists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'activity' => 'required',
            'description' => 'required',
            'date_activity' => 'required',
            'time_activity' => 'required',
            'status' => 'required',
        ]);

        $hallo = ToDoList::create([
            'activity' => $request->activity,
            'description' => $request->description,
            'date_activity' => $request->date_activity,
            'time_activity' => $request->time_activity,
            'status' => $request->status,
        ]);

        // dd($hallo);
        return redirect('lists');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $lists = ToDoList::all()->where('date_activity','=',date('Y-m-d'));
        return view('lists.index', ['lists' => $lists]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lists = ToDoList::find($id);
        return view('lists.edit', ['lists' => $lists]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'activity' => 'required',
            'description' => 'required',
            'date_activity' => 'required',
            'time_activity' => 'required',
            'status' => 'required',
        ]);

        $lists = ToDoList::find($id);
        $lists->activity = $request->activity;
        $lists->description = $request->description;
        $lists->date_activity = $request->date_activity;
        $lists->time_activity = $request->time_activity;
        $lists->status = $request->status;

        $lists->save();

        return redirect('lists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $lists = ToDoList::find($id);
        $lists->delete();
        return redirect('lists');
    }
}

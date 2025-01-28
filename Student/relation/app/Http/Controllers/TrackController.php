<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    
    public function index()
    {
        $tracks = Track::all();  
        return view('tracks', ['tracks' => $tracks]);
    }

    
    // public function view($id)
    // {
    //     $track = Track::findOrFail($id);  
    //     return view('view', compact('track'));
    // }

    public function viewtrack($id)
{
    $track = Track::findOrFail($id);
    return view('viewtrack', compact('track'));  // Make sure the view name matches
}

 
    public function destroy($id)
    {
        $track = Track::findOrFail($id);  
        $track->delete();  
        return to_route('tracks.index');  
    }

    
    public function create()
{
    return view('create');  
}


    
    public function store(Request $request)
    {

        $requestData = request()->all();
        Track::create($requestData);
        return to_route('tracks.index');



        // $requestData = $request->all();  
        // $track = new Track();
        // $track->name = $requestData['name'];
        // $track->description = $requestData['description'];
        // $track->save();  
        // return to_route('tracks.index');  
    //     $request->validate([
    //         'name'=>'required|unique:tracks|min:2',
    //         'description'=>"required|unique:tracks|min:10|max:30"
    //        ],[
    //            'name.required'=>"track name is required",
    //            'name.unique'=>"track name already exist",
    //            'name.min'=>"track name should be more than or equal 2 characters ",
    //            'description.required'=>"track description is required",
    //            'description.unique'=>"track description already exist",
    //            'description.min'=>"track description should be more than or equal 10 characters ",
    //        ]
    //    );
    //        $requestData=$request->all();
    //        // dump($requestData);
    //        Track::create($requestData);
    //        return to_route('tracks');


    }

   
    public function edit($id)
    {
        $track = Track::findOrFail($id);  
        return view('edittrack', compact('track'));
    }

    public function update($id, Request $request)
    {
        $track = Track::findOrFail($id);  
        $track->update($request->all()); 
        return to_route('tracks.index');  
    }
    
    
}
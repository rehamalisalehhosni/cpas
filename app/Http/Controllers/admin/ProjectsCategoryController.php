<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ProjectsCategory;

class ProjectsCategoryController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $projectsCategory = ProjectsCategory::orderBy('projects_category_id','DESC')->paginate(5);
        return view('ProjectsCategory.index',compact('projectsCategory'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('ProjectsCategory.create');

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        ProjectsCategory::create($request->all());


        return redirect()->route('projectCategory.index')
        ->with('success','Projects Category created successfully');

    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
        $projectsCategory = ProjectsCategory::find($id);
        return view('ProjectsCategory.show',compact('projectsCategory'));

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $projectsCategory = ProjectsCategory::find($id);
        return view('ProjectsCategory.edit',compact('projectsCategory'));

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
        $this->validate($request, [
            'title' => 'required',
        ]);


        ProjectsCategory::find($id)->update($request->all());


        return redirect()->route('projectCategory.index')
        ->with('success','Projects Category updated successfully');
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
        ProjectsCategory::find($id)->delete();
        return redirect()->route('projectCategory.index')
        ->with('success','Projects Category deleted successfully');

    }
}

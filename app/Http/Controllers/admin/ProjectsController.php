<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Models\ProjectsImages;
use App\Models\ProjectsCategory;

use Validator;

class ProjectsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $projects = Projects::orderBy('projects_id','DESC')->paginate(5);
    return view('Projects.index',compact('projects'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $projectsCategory= ProjectsCategory::lists('title','projects_category_id');
    return view('Projects.create',compact('projectsCategory'));

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
      'description' => 'required',
      'lat' => 'required',
      'long' => 'required',
      'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $projects = new Projects;
    $projects->title = $request->title;
    $projects->lat = $request->lat;
    $projects->long = $request->long;
    $request->description=str_replace('../', url('/'), $request->description);
    $projects->description = $request->description;
    if($file = $request->hasFile('main_image')) {
      $file = $request->file('main_image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/projects/' ;
      $file->move($destinationPath,$fileName);
      $projects->main_image = $fileName ;
    }
    $projects->save() ;
    if($request->hasFile('images')) {
      $destinationPath = public_path().'/Uploads/projects_images/' ;
      $files = $request->file('images');
      // Making counting of uploaded images
      $file_count = count($files);
      // start count how many uploaded
      $uploadcount = 0;
      foreach($files as $file) {
        $rules = array('file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
        $validator = Validator::make(array('file'=> $file), $rules);
        if($validator->passes()){
          $extension = $file->getClientOriginalExtension(); // getting image extensionrealstate_thumb
          $image_name=explode('.', $file->getClientOriginalName());
          $fileName =$image_name[0].'_'. time().'.'.$extension; // renameing image
          $file->move($destinationPath, $fileName); // uploading file to given path
          $projectsImage=  new ProjectsImages;
          $projectsImage->image=$fileName;
          $projectsImage->projects_id=$projects->projects_id;
          $projectsImage->save();
        }
      }

    }
    return redirect()->route('projects.index')
    ->with('success','Projects created successfully');
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
    $item = Projects::find($id);
    return view('Projects.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $item = Projects::find($id);
    return view('Projects.edit',compact('item'));

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
      'title' => 'required',
      'description' => 'required',
      'lat' => 'required',
      'long' => 'required',
      'main_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $projects=Projects::find($id);
    //->update($request->all());
    $projects->title = $request->title;
    $projects->long = $request->long;
    $projects->lat = $request->lat;
    $request->description=str_replace('../', url('/'), $request->description);
    $projects->description = $request->description;
    if($file = $request->hasFile('main_image')) {
      $file = $request->file('main_image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/projects/' ;
      $file->move($destinationPath,$fileName);
      $projects->main_image = $fileName ;
    }
    $projects->update() ;
    if($request->hasFile('images')) {
      $destinationPath = public_path().'/Uploads/projects_images/' ;
      $files = $request->file('images');
      // Making counting of uploaded images
      $file_count = count($files);
      // start count how many uploaded
      $uploadcount = 0;
      foreach($files as $file) {
        $rules = array('file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
        $validator = Validator::make(array('file'=> $file), $rules);
        if($validator->passes()){
          $extension = $file->getClientOriginalExtension(); // getting image extensionrealstate_thumb
          $image_name=explode('.', $file->getClientOriginalName());
          $fileName =$image_name[0].'_'. time().'.'.$extension; // renameing image
          $file->move($destinationPath, $fileName); // uploading file to given path
          $projectsImage=  new ProjectsImages;
          $projectsImage->image=$fileName;
          $projectsImage->projects_id=$projects->projects_id;
          $projectsImage->save();
        }
      }
    }
    return redirect()->route('projects.index')
    ->with('success','Projects updated successfully');

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */

  public function deleteProjectsImages(Request $request){
    ProjectsImages::find($request->id)->delete();
    return response()->json(true);
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
    Projects::find($id)->delete();
    return redirect()->route('projects.index')
    ->with('success','Projects deleted successfully');

  }
}

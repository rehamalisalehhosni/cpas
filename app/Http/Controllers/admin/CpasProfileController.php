<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\CpasProfile;
use Validator;

class CpasProfileController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $cpasProfile = CpasProfile::orderBy('cpas_profile_id','DESC')->paginate(5);
    return view('CpasProfile.index',compact('cpasProfile'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('CpasProfile.create');

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
      'sort' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    //$news = new News($request->input()) ;
    $cpasProfile = new CpasProfile;
    $cpasProfile->title = $request->title;
    $cpasProfile->sort = $request->sort;
    $request->description=str_replace('../', url('/'), $request->description);
    $cpasProfile->description = $request->description;
    if($file = $request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/cpasprofile/' ;
      $file->move($destinationPath,$fileName);
      $cpasProfile->image = $fileName ;
    }
    $cpasProfile->save() ;

    return redirect()->route('cpasProfile.index')
    ->with('success','Cpas Profile created successfully');
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
    $item = CpasProfile::find($id);
    return view('cpasProfile.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $item = CpasProfile::find($id);
    return view('CpasProfile.edit',compact('item'));

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
      'sort' => 'required',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $cpasProfile=CpasProfile::find($id);
    //->update($request->all());
    $cpasProfile->title = $request->title;
    $cpasProfile->sort = $request->sort;
    $request->description=str_replace('../', url('/'), $request->description);
    $cpasProfile->description = $request->description;

    if($file = $request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/cpasbooks/' ;
      $file->move($destinationPath,$fileName);
      $cpasProfile->image = $fileName ;
    }
    $cpasProfile->update() ;

    return redirect()->route('cpasProfile.index')
    ->with('success','cpas profile updated successfully');

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
    CpasProfile::find($id)->delete();
    return redirect()->route('cpasProfile.index')
    ->with('success','Cpas Profile deleted successfully');

  }
}

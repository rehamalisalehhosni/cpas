<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Certifications;
use App\Models\CertificationType;
use Validator;


class CertificationsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $certifications = Certifications::orderBy('certifications_id','DESC')->paginate(5);
    return view('Certifications.index',compact('certifications'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $types= CertificationType::lists('title','certification_type_id');
    return view('Certifications.create',compact('types'));


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
      'certification_type_id' => 'required',
      'description' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    //$news = new News($request->input()) ;
    $certifications = new Certifications;
    $certifications->title = $request->title;
    $request->description=str_replace('../', url('/'), $request->description);
    $certifications->description = $request->description;
    $certifications->certification_type_id = $request->certification_type_id;
    if($file = $request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/certifications/' ;
      $file->move($destinationPath,$fileName);
      $certifications->image = $fileName ;
    }
    $certifications->save() ;

    return redirect()->route('certifications.index')
    ->with('success','Certifications created successfully');
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

    $item = Certifications::find($id);
    return view('Certifications.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {

    $types= CertificationType::lists('title','certification_type_id');

    $item = Certifications::find($id);
    return view('Certifications.edit',compact('item','types'));

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
      'certification_type_id' => 'required',
      'description' => 'required',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $certifications=Certifications::find($id);
    $certifications->title = $request->title;
    $request->description=str_replace('../', url('/'), $request->description);
    $certifications->description = $request->description;
    $certifications->certification_type_id = $request->certification_type_id;
    if($file = $request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/certifications/' ;
      $file->move($destinationPath,$fileName);
      $certifications->image = $fileName ;
    }
    $certifications->update() ;

    return redirect()->route('certifications.index')
    ->with('success','Certifications updated successfully');

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
    Certifications::find($id)->delete();
    return redirect()->route('certifications.index')
    ->with('success','Certifications deleted successfully');

  }
}

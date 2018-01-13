<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Services;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
      //
      $services= Services::orderBy('services_id','DESC')->paginate(5);
      return view('Services.index',compact('services'))
      ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
      return view('Services.create');

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
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      //$news = new News($request->input()) ;
      $services = new Services;
      $services->title = $request->title;
      $request->description=str_replace('../', url('/'), $request->description);
      $services->description = $request->description;
      if($file = $request->hasFile('image')) {
          $file = $request->file('image') ;
          $extension = $file->getClientOriginalExtension();
          $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
          //$fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/Uploads/services/' ;
          $file->move($destinationPath,$fileName);
          $services->image = $fileName ;
      }
      $services->save() ;

      return redirect()->route('services.index')
      ->with('success','Services created successfully');
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
      $item = Services::find($id);
      return view('Services.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
      $item = Services::find($id);
      return view('Services.edit',compact('item'));

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
          'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $services=Services::find($id);
      //->update($request->all());
      $services->title = $request->title;
      $request->description=str_replace('../', url('/'), $request->description);
      $services->description = $request->description;
      if($file = $request->hasFile('image')) {
          $file = $request->file('image') ;
          $extension = $file->getClientOriginalExtension();
          $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
          //$fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/Uploads/services/' ;
          $file->move($destinationPath,$fileName);
          $services->image = $fileName ;
      }
      $services->update() ;
      return redirect()->route('services.index')
      ->with('success','Services updated successfully');

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
      Services::find($id)->delete();
      return redirect()->route('services.index')
      ->with('success','Services deleted successfully');

  }
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Alambnaaa;
use Validator;

class AlambnaaaController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $alambnaaa = Alambnaaa::orderBy('alambnaaa_id','DESC')->paginate(5);
    return view('Alambnaaa.index',compact('alambnaaa'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('Alambnaaa.create');

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
      'file' => 'required|mimes:pdf,dox,zip,rar|max:50048',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $alambnaaa = new Alambnaaa;
    $alambnaaa->title = $request->title;
    if($file = $request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/alambnaaa/images/' ;
      $file->move($destinationPath,$fileName);
      $alambnaaa->image = $fileName ;
    }
    if($request->hasFile('file')) {
      $file = $request->file('file') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/alambnaaa/files/' ;
      $file->move($destinationPath,$fileName);
      $alambnaaa->file = $fileName ;
    }
    $alambnaaa->save() ;
    return redirect()->route('alambnaaa.index')
    ->with('success','Alambnaaa created successfully');
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
    $item = Alambnaaa::find($id);
    return view('Alambnaaa.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $item = Alambnaaa::find($id);
    return view('Alambnaaa.edit',compact('item'));

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
      'file' => 'mimes:pdf,dox,zip,rar|max:50048',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $alambnaaa=Alambnaaa::find($id);
    //->update($request->all());
    $alambnaaa->title = $request->title;
    if($file = $request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/alambnaaa/images/' ;
      $file->move($destinationPath,$fileName);
      $alambnaaa->image = $fileName ;
    }
    if($request->hasFile('file')) {
      $file = $request->file('file') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/alambnaaa/files/' ;
      $file->move($destinationPath,$fileName);
      $alambnaaa->file = $fileName ;
    }
    $alambnaaa->update() ;

    return redirect()->route('alambnaaa.index')
    ->with('success','Alambnaaa updated successfully');

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
    Alambnaaa::find($id)->delete();
    return redirect()->route('alambnaaa.index')
    ->with('success','Alambnaaa deleted successfully');
  }

}

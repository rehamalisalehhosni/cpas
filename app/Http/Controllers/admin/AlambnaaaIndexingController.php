<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AlambnaaaIndexing;
use Validator;

class AlambnaaaIndexingController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $alambnaaaIndexing = AlambnaaaIndexing::orderBy('alambnaaa_indexing_id','DESC')->paginate(5);
    return view('AlambnaaaIndexing.index',compact('alambnaaaIndexing'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('AlambnaaaIndexing.create');

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
      'year_from' => 'required',
      'year_to' => 'required',
      'file' => 'required|mimes:pdf,dox,zip,rar|max:50048',
    ]);
    $alambnaaaIndexing = new AlambnaaaIndexing;
    $alambnaaaIndexing->title = $request->title;
    $alambnaaaIndexing->year_from = $request->year_from;
    $alambnaaaIndexing->year_to = $request->year_to;
    if($request->hasFile('file')) {
      $file = $request->file('file') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/alambnaaaindexing/files/' ;
      $file->move($destinationPath,$fileName);
      $alambnaaaIndexing->file = $fileName ;
    }
    $alambnaaaIndexing->save() ;
    return redirect()->route('alambnaaaIndexing.index')
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
    $item = AlambnaaaIndexing::find($id);
    return view('AlambnaaaIndexing.show',compact('item'));

  }
  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $item = AlambnaaaIndexing::find($id);
    return view('AlambnaaaIndexing.edit',compact('item'));

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
      'year_from' => 'required',
      'year_to' => 'required',
      'file' => 'mimes:pdf,dox,zip,rar|max:50048',
    ]);
    $alambnaaaIndexing=AlambnaaaIndexing::find($id);
    //->update($request->all());
    $alambnaaaIndexing->title = $request->title;
    $alambnaaaIndexing->year_from = $request->year_from;
    $alambnaaaIndexing->year_to = $request->year_to;
    if($request->hasFile('file')) {
      $file = $request->file('file') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/alambnaaaindexing/files/' ;
      $file->move($destinationPath,$fileName);
      $alambnaaaIndexing->file = $fileName ;
    }
    $alambnaaaIndexing->update() ;

    return redirect()->route('alambnaaaIndexing.index')
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
    alambnaaaIndexing::find($id)->delete();
    return redirect()->route('alambnaaaIndexing.index')
    ->with('success','Alambnaaa deleted successfully');
  }

}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\CertificationType;

use Validator;


class CertificationTypeController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $certificationType = CertificationType::orderBy('certification_type_id','DESC')->paginate(5);
    return view('CertificationType.index',compact('certificationType'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('CertificationType.create');

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
    //$news = new News($request->input()) ;
    $certificationType = new CertificationType;
    $certificationType->title = $request->title;
    $certificationType->save() ;

    return redirect()->route('certificationType.index')
    ->with('success','Certification Type created successfully');
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
    $item = CertificationType::find($id);
    return view('CertificationType.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $item = CertificationType::find($id);
    return view('CertificationType.edit',compact('item'));

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
    ]);
    $certificationType=CertificationType::find($id);
    //->update($request->all());
    $certificationType->title = $request->title;
    $certificationType->update() ;

    return redirect()->route('certificationType.index')
    ->with('success','Certification Type updated successfully');

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
    CertificationType::find($id)->delete();
    return redirect()->route('certificationType.index')
    ->with('success','Certification Type deleted successfully');
  }


}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\OrganisationCharts;
use Validator;
class OrganisationChartsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $organisationCharts= OrganisationCharts::orderBy('organisation_charts_id','DESC')->paginate(5);
    return view('OrganisationCharts.index',compact('organisationCharts'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('OrganisationCharts.create');

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
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    //$news = new News($request->input()) ;
    $organisationCharts = new OrganisationCharts;
    $organisationCharts->title = $request->title;
    if($file = $request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/organisationcharts/' ;
      $file->move($destinationPath,$fileName);
      $organisationCharts->image = $fileName ;
    }
    $organisationCharts->save() ;

    return redirect()->route('organisationCharts.index')
    ->with('success','Organisation Charts created successfully');
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
    $item = OrganisationCharts::find($id);
    return view('organisationCharts.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $item = OrganisationCharts::find($id);
    return view('OrganisationCharts.edit',compact('item'));

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
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $organisationCharts=OrganisationCharts::find($id);
    //->update($request->all());
    $organisationCharts->title = $request->title;
    if($file = $request->hasFile('image')) {
      $file = $request->file('image') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/organisationcharts/' ;
      $file->move($destinationPath,$fileName);
      $organisationCharts->image = $fileName ;
    }
    $organisationCharts->update() ;

    return redirect()->route('organisationCharts.index')
    ->with('success','Organisation Charts updated successfully');

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
    OrganisationCharts::find($id)->delete();
    return redirect()->route('organisationCharts.index')
    ->with('success','Cpas Profile deleted successfully');

  }
}

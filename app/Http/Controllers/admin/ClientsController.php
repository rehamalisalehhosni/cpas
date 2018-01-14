<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\ClientsTypes;
use Validator;

class ClientsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
    //
    $clients = Clients::orderBy('clients_id','DESC')->paginate(5);
    return view('Clients.index',compact('clients'))
    ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $types= ClientsTypes::lists('title','clients_types_id');
    return view('Clients.create',compact('types'));


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
      'type_id' => 'required',
      'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    //$news = new News($request->input()) ;
    $clients = new Clients;
    $clients->title = $request->title;
    $clients->type_id = $request->type_id;
    if($file = $request->hasFile('logo')) {
      $file = $request->file('logo') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/clients/' ;
      $file->move($destinationPath,$fileName);
      $clients->logo = $fileName ;
    }
    $clients->save() ;

    return redirect()->route('clients.index')
    ->with('success','Clients created successfully');
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

    $item = Clients::find($id);
    return view('Clients.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {

    $types= ClientsTypes::lists('title','clients_types_id');

    $item = Clients::find($id);
    return view('Clients.edit',compact('item','types'));

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
      'type_id' => 'required',
      'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $clients=Clients::find($id);
    //->update($request->all());
    $clients->type_id = $request->type_id;
    $clients->title = $request->title;
    if($file = $request->hasFile('logo')) {
      $file = $request->file('logo') ;
      $extension = $file->getClientOriginalExtension();
      $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
      //$fileName = $file->getClientOriginalName() ;
      $destinationPath = public_path().'/Uploads/clients/' ;
      $file->move($destinationPath,$fileName);
      $clients->image = $fileName ;
    }
    $clients->update() ;

    return redirect()->route('clients.index')
    ->with('success','Clients updated successfully');

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
    Clients::find($id)->delete();
    return redirect()->route('clients.index')
    ->with('success','Clients deleted successfully');

  }
}

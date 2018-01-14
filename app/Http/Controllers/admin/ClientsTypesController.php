<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\ClientsTypes;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;


class ClientsTypesController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
      //
      $clientsTypes = ClientsTypes::orderBy('clients_types_id','DESC')->paginate(5);
      return view('ClientsTypes.index',compact('clientsTypes'))
      ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
      return view('ClientsTypes.create');

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
      $clientsTypes = new ClientsTypes;
      $clientsTypes->title = $request->title;
      $clientsTypes->save() ;

      return redirect()->route('clientsTypes.index')
      ->with('success','Clients Types created successfully');
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
      $item = ClientsTypes::find($id);
      return view('ClientsTypes.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
      $item = ClientsTypes::find($id);
      return view('ClientsTypes.edit',compact('item'));

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
      $clientsTypes=ClientsTypes::find($id);
      //->update($request->all());
      $clientsTypes->title = $request->title;
      $clientsTypes->update() ;

      return redirect()->route('clientsTypes.index')
      ->with('success','Clients Types updated successfully');

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
      ClientsTypes::find($id)->delete();
      return redirect()->route('clientsTypes.index')
      ->with('success','Clients Types deleted successfully');
  }

}

<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Seniors;

class SeniorsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
      //
      $seniors = Seniors::orderBy('seniors_id','DESC')->paginate(5);
      return view('Seniors.index',compact('seniors'))
      ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
      return view('Seniors.create');

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
          'description' => '',
        //  'category	' => 'required',
          'general_experience' => 'required',
          'experience_cpas' => 'required',
          'sort' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      //$news = new News($request->input()) ;
      $seniors = new Seniors;
      $seniors->title = $request->title;
      $seniors->category = $request->category;
      $seniors->experience_cpas = $request->experience_cpas;
      $seniors->general_experience = $request->general_experience;
      $request->description=str_replace('../', url('/'), $request->description);
      $seniors->description = $request->description;
      $seniors->sort = $request->sort;
      if($file = $request->hasFile('image')) {
          $file = $request->file('image') ;
          $extension = $file->getClientOriginalExtension();
          $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
          //$fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/Uploads/seniors/' ;
          $file->move($destinationPath,$fileName);
          $seniors->image = $fileName ;
      }
      $seniors->save() ;

      return redirect()->route('seniors.index')
      ->with('success','Seniors created successfully');
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
      $item = Seniors::find($id);
      return view('Seniors.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
      $item = Seniors::find($id);
      return view('Seniors.edit',compact('item'));

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
        'description' => '',
        'category	' => '',
        'general_experience' => 'required',
        'experience_cpas' => 'required',
        'sort' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $seniors = new Seniors;
      $seniors->title = $request->title;
      $seniors->category = $request->category;
      $seniors->experience_cpas = $request->experience_cpas;
      $seniors->general_experience = $request->general_experience;
      $request->description=str_replace('../', url('/'), $request->description);
      $seniors->description = $request->description;
      $seniors->sort = $request->sort;
      if($file = $request->hasFile('image')) {
          $file = $request->file('image') ;
          $extension = $file->getClientOriginalExtension();
          $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
          //$fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/Uploads/seniors/' ;
          $file->move($destinationPath,$fileName);
          $seniors->image = $fileName ;
      }
      $seniors->update() ;

      return redirect()->route('seniors.index')
      ->with('success','Seniors updated successfully');

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
      Seniors::find($id)->delete();
      return redirect()->route('seniors.index')
      ->with('success','Seniors deleted successfully');

  }
}

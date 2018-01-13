<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\CpasBooks;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CpasBooksController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index(Request $request)
  {
      //
      $cpasBooks = CpasBooks::orderBy('cpas_books_id','DESC')->paginate(5);
      return view('CpasBooks.index',compact('cpasBooks'))
      ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
      return view('CpasBooks.create');

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
          'subject' => 'required',
          'author' => 'required',
          'price' => 'required',
          'no_pages' => 'required',
          'publication_date' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      //$news = new News($request->input()) ;
      $cpasBooks = new CpasBooks;
      $cpasBooks->author = $request->author;
      $cpasBooks->price = $request->price;
      $cpasBooks->title = $request->title;
      $cpasBooks->no_pages = $request->no_pages;
      $request->subject=str_replace('../', url('/'), $request->subject);
      $cpasBooks->subject = $request->subject;
      $cpasBooks->publication_date = $request->publication_date;
      if($file = $request->hasFile('image')) {
          $file = $request->file('image') ;
          $extension = $file->getClientOriginalExtension();
          $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
          //$fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/Uploads/cpasbooks/' ;
          $file->move($destinationPath,$fileName);
          $cpasBooks->image = $fileName ;
      }
      $cpasBooks->save() ;

      return redirect()->route('cpasBooks.index')
      ->with('success','Books created successfully');
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
      $item = CpasBooks::find($id);
      return view('CpasBooks.show',compact('item'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
      $item = CpasBooks::find($id);
      return view('CpasBooks.edit',compact('item'));

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
        'subject' => 'required',
        'author' => 'required',
        'price' => 'required',
        'no_pages' => 'required',
        'publication_date' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $cpasBooks=CpasBooks::find($id);
      //->update($request->all());
      $cpasBooks->author = $request->author;
      $cpasBooks->price = $request->price;
      $cpasBooks->title = $request->title;
      $cpasBooks->no_pages = $request->no_pages;
      $request->subject=str_replace('../', url('/'), $request->subject);
      $cpasBooks->subject = $request->subject;
      $cpasBooks->publication_date = $request->publication_date;
      if($file = $request->hasFile('image')) {
          $file = $request->file('image') ;
          $extension = $file->getClientOriginalExtension();
          $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
          //$fileName = $file->getClientOriginalName() ;
          $destinationPath = public_path().'/Uploads/cpasbooks/' ;
          $file->move($destinationPath,$fileName);
          $cpasBooks->image = $fileName ;
      }
      $cpasBooks->update() ;

      return redirect()->route('cpasBooks.index')
      ->with('success','Books updated successfully');

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
      CpasBooks::find($id)->delete();
      return redirect()->route('cpasBooks.index')
      ->with('success','Books deleted successfully');

  }
}

<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsImages;
use Validator;
class NewsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        //
        $news = News::orderBy('news_id','DESC')->paginate(5);
        return view('News.index',compact('news'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('News.create');

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
            'text' => 'required',
            'publish_date' => 'required',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //$news = new News($request->input()) ;
        $news = new News;
        $news->title = $request->title;
        $request->text=str_replace('../', url('/'), $request->text);
        $news->text = $request->text;
        $news->publish_date = $request->publish_date;
        if($file = $request->hasFile('main_image')) {
            $file = $request->file('main_image') ;
            $extension = $file->getClientOriginalExtension();
            $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
            //$fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/Uploads/news/' ;
            $file->move($destinationPath,$fileName);
            $news->main_image = $fileName ;
        }
        $news->save() ;
        if($request->hasFile('images')) {
            $destinationPath = public_path().'/Uploads/news_images/' ;
            $files = $request->file('images');
            // Making counting of uploaded images
            $file_count = count($files);
            // start count how many uploaded
            $uploadcount = 0;
            foreach($files as $file) {
                $rules = array('file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                    $extension = $file->getClientOriginalExtension(); // getting image extensionrealstate_thumb
                    $image_name=explode('.', $file->getClientOriginalName());
                    $fileName =$image_name[0].'_'. time().'.'.$extension; // renameing image
                    $file->move($destinationPath, $fileName); // uploading file to given path
                    $newsImage=  new NewsImages;
                    $newsImage->image=$fileName;
                    $newsImage->news_id=$news->news_id;
                    $newsImage->save();
                }
            }

        }
        return redirect()->route('news.index')
        ->with('success','News created successfully');
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
        $item = News::find($id);
        return view('News.show',compact('item'));

    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $item = News::find($id);
        return view('News.edit',compact('item'));

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
            'publish_date' => 'required',
            'text' => 'required',
            'main_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $news=News::find($id);
        //->update($request->all());
        $news->title = $request->title;
        $request->text=str_replace('../', url('/'), $request->text);
        $news->text = $request->text;
        $news->publish_date = $request->publish_date;
        if($file = $request->hasFile('main_image')) {
            $file = $request->file('main_image') ;
            $extension = $file->getClientOriginalExtension();
            $fileName =explode('.', $file->getClientOriginalName())[0].time().'.'.$extension;
            //$fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/Uploads/news/' ;
            $file->move($destinationPath,$fileName);
            $news->main_image = $fileName ;
        }
        $news->update() ;
        if($request->hasFile('images')) {
            $destinationPath = public_path().'/Uploads/news_images/' ;
            $files = $request->file('images');
            // Making counting of uploaded images
            $file_count = count($files);
            // start count how many uploaded
            $uploadcount = 0;
            foreach($files as $file) {
                $rules = array('file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048');
                $validator = Validator::make(array('file'=> $file), $rules);
                if($validator->passes()){
                    $extension = $file->getClientOriginalExtension(); // getting image extensionrealstate_thumb
                    $image_name=explode('.', $file->getClientOriginalName());
                    $fileName =$image_name[0].'_'. time().'.'.$extension; // renameing image
                    $file->move($destinationPath, $fileName); // uploading file to given path
                    $newsImage=  new NewsImages;
                    $newsImage->image=$fileName;
                    $newsImage->news_id=$news->news_id;
                    $newsImage->save();
                }
            }
        }
        return redirect()->route('news.index')
        ->with('success','news updated successfully');

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function deleteNewsImages(Request $request){
        NewsImages::find($request->id)->delete();
        return response()->json(true);
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
        News::find($id)->delete();
        return redirect()->route('news.index')
        ->with('success','News deleted successfully');

    }
}

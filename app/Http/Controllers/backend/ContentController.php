<?php

namespace App\Http\Controllers\backend;

use App\Category;
use App\Content;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contentCreate()
    {
       $categories =  Category::all();
        return view('backend.content.create')->with('categories', $categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contentStore(Request $request)
    {
        $content = new Content;
        $content->contentName = $request->content_name;
        $content->category_id  = $request->category_id;
        $content->contentDesc = $request->content_desc;
        $files = $request->file('file');
        $fileName = date('YmdHis').".". $files->getClientOriginalExtension();
        $request->file->move(public_path('uploads'), $fileName);
        $content->content_pic = $fileName;
        $content->save();
        return redirect('admin/viewContent')->with('status', 'Content is Added');

    }


    public function getAllContents(){
        $contents =  Content::with('category')->get();
        return view('backend.content.allContents',compact('contents'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}

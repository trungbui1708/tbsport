<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Image;
class NewsController extends Controller
{
    public function getList()
    {
    	$news = News::all();
    	return view('admin.News.List',['news' => $news]); 
    }

    public function getAdd()
    {
        
    	$category = Category::all();
    	return view('admin.News.Add',['category'=> $category]);
    }

    public function postAdd(Request $request)
    {
    	$this -> validate($request,[
    		'category'=>'required',
    		'tittle'=>'required|min:3|unique:news,tittle',
    		'author'=>'required|min:3',
    		'description'=>'required|min:3',
    		'content'=>'required|min:3'
    		],[
    		'category.required'=>'You have not entered category name',
    		'tittle.required'=>'You have not entered a title',
    		'tittle.min'=>'Title at least 3 characters',
    		'tittle.unique'=>'Title already exists',
    		'description.required'=>'You have not entered the description',
    		'description.min'=>'description at least 3 characters',
    		'author.required'=>'You have not enterd the author',
    		'author.min'=>'Author at least 3 characters',
    		'content.required'=>'You have not enterd the content',
    		'content.min'=>'Content at least 3 characters'
    		]);
        if ($request -> hasFile('file')) 
        {

            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('upload/news', $filename);
            $news = new News;
            $news -> category_id = $request -> category;
            $news-> tittle = $request -> tittle;
            $news-> description = $request -> description;
            $news-> author = $request -> author;
            $news-> content = $request -> content;
            $news-> image = $filename;
            $news -> save();
        
        }
    	return redirect ('admin/news/list') -> with('notifi','Add successfully');
    }
    public function getEdit($id)
    {   

        $category = Category::all();
        $news = News::find($id);
        return view ('admin.News.Edit',['news' => $news, 'category'=>$category]);
    }
    public function postEdit(Request $request, $id)
    {
            $news = News::find($id);
           $this -> validate($request,[
            'category'=>'required',
            'tittle'=>'required|min:3',
            'author'=>'required|min:3',
            'description'=>'required|min:3',
            'content'=>'required|min:3'
            ],[
            'category.required'=>'You have not entered category name',
            'tittle.required'=>'You have not entered a title',
            'tittle.min'=>'Title at least 3 characters',
            'description.required'=>'You have not entered the description',
            'description.min'=>'description at least 3 characters',
            'author.required'=>'You have not enterd the author',
            'author.min'=>'Author at least 3 characters',
            'content.required'=>'You have not enterd the content',
            'content.min'=>'Content at least 3 characters'
            ]);
        
        if ($request -> hasFile('file')) 
        {

            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('upload/news', $filename);
            $news -> category_id = $request -> category;
            $news-> tittle = $request -> tittle;
            $news-> description = $request -> description;
            $news-> author = $request -> author;
            $news-> content = $request -> content;
            $news-> image = $filename;
            $news -> save();
        
        }
        return redirect ('admin/news/list') -> with('notifi','Edit successfully');
    }
    public function getDelete($id)
    {
        $news = News::find($id);
        $news -> delete();
        return redirect ('admin/news/list') -> with('notifi','Delete successfully');
    }
}

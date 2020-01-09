<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caffe;
use App\Http\Requests\CaffeStore;
use App\Comment;
class WelcomeController extends Controller
{
    

	public function index(){

		$caffe = Caffe::all();

		return view('welcome', compact('caffe'));

	}


	public function create()
    {
        return view ('caffe.create');
    }

    

    public function store(CaffeStore $request)
    {
        
	    Caffe::create($request->all());


        return redirect('/');
    }


    public function edit(Caffe $id)
    {
       

        return view('caffe.edit', ['caffe'=>$id]);
    }


public function update(CaffeStore $request, $id)
    {

     $caffe = Caffe::findorfail($id);
     $caffe->update($request->all());

    return redirect('/');
    }


    public function destroy(Caffe $id)
    {
       $id->delete();

        return redirect('/');
}

public function post_comment( Request $request, $caffe_id ){

   $data['name'] = request('name');
   $data['title'] = request('title');
   $data['text'] = request('text');
   $data['caffe_id'] = $caffe_id;

   Comment::create($data);

   



}



}

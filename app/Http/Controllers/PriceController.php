<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caffe;
use App\Price;
use App\Http\Requests\PriceStore;
use App\Comment;

class PriceController extends Controller
{
    

public function show(Caffe $id){
	$price = Price::all();
	return view('price.show', ['caffe'=>$id], compact('price'));

}




public function create(Caffe $caffe_id)
    {
        return view ('price.create', ['caffe'=>$caffe_id]);
    }

    public function store(PriceStore $request, $id)
    {
        $data = $request->all();
        $data['caffes_id'] = $id;
	    Price::create($data);


        return redirect($id . '/show');
    }




public function edit(Price $id)
    {
       

        return view('price.edit', ['price'=>$id]);
    }

    public function update(PriceStore $request, $id, $caffe_id)
    {

     $price = Price::findorfail($id);
     $price->update($request->all());

    return redirect($caffe_id . '/show')->withMessage('Price updated successfuly');
    }

     public function destroy(Price $id)
    {
       $id->delete();

        return redirect()->back();
    }


}

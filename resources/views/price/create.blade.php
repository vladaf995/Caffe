@extends('layout2')

@section('input')

<div class="container">
  <h2>Create a new product</h2>
  <form class="form-horizontal" method="POST" action="/store_product/{{ $caffe->id }}" >
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required value={{ old('name')}}>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Price:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="price" placeholder="Price" name="price" required value={{ old('price')}}>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Create a new product</button>
      </div>
    </div>



  </form>
</div>

@endsection
@extends('layout2')

@section('input')

<div class="container">
  <h2>Create a new caffe</h2>
  <form class="form-horizontal" method="POST" action="/caffes" >
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required value={{ old('name')}}>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" placeholder="Address" name="address" required value={{ old('address')}}>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required value={{ old('phone')}}>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Add caffe</button>
      </div>
    </div>

@include('errors')

  </form>
</div>

@endsection
@extends('layout2')

@section('input')

<div class="container">
  <h2>Edit pricelist</h2>
  <form class="form-horizontal" method="POST" action="/{{$price->id}}/priceEdit/{{$price->caffes_id}}">

    @method('PATCH')
	@csrf
	{{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required value={{ $price->name }}>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Price:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="price" placeholder="Price" name="price" required value={{ $price->price }}>
      </div>
    </div>

   

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Edit pricelist</button>
      </div>
    </div>
</form>
</div>



@endsection
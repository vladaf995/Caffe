@extends('layout')

@section('form')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
   @endif


	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
@foreach($price as $p)
  @if($p->caffes_id == $caffe->id)
    <tr> 
      

      <td>{{ $p->id }}</td>
      <td>{{ $p->name }}</td>
      <td> {{ $p->price }} </td>

      <td> <button onclick="window.location='/edit/{{$p->id}}'" type="button" class="btn btn-primary">Update price</button><th> </td>
      <td> <form method="POST" action="/{{ $p->id }}/delete_price">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete price</button>
        
        </form> </td>

    </tr>
  @endif
@endforeach

  </tbody>
</table>

<button onclick="window.location='/create_product/{{ $caffe->id }}'" type="button" class="btn btn-success">Create a new product</button>



<br>
<br>

  <form method="POST" action="/comment/{{ $caffe->id }}">

  @csrf

 <div class="form-group">
  <label for="usr">Name:</label>
  <input name="name" type="text" class="form-control" id="usr">
</div>
 <div class="form-group">
  <label for="usr">Title:</label>
  <input name="title" type="text" class="form-control" id="usr">
</div>
 <div class="form-group">
  <label for="usr">Text:</label>
  <textarea name="text" type="text" class="form-control" id="usr"></textarea>
</div>

  <button type="submit">Add comment</button>


  </form>

@foreach($caffe->comments as $c)
  <p>{{ $c->name }}</p>
  <p>{{ $c->title }}</p>
  <p>{{ $c->text }}</p>

@endforeach




@endsection
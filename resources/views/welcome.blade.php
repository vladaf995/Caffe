@extends('layout')


@section('form')


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>

   @foreach ($caffe as $c)
    <tr> 
      

      <td>{{ $c->id }}</td>
      <td>{{ $c->name }}</td>
      <td> {{ $c->address }} </td>
      <td> {{ $c->phone }} </td>
      <td> <button onclick="window.location='/{{$c->id}}/show'" type="button" class="btn btn-primary">Pricelist</button><th> </td>
      <td> <button onclick="window.location='/edit_caffe/{{$c->id}}'" type="button" class="btn btn-primary">Update caffe</button><th> </td>
      <td> <form method="POST" action="/{{ $c->id }}/delete">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete caffe</button>
        
        </form> </td>

    </tr>
    @endforeach
  </tbody>
</table>

<button onclick="window.location='/create/'" type="button" class="btn btn-success">Add caffe</button>










@endsection
@extends('admin')

@section('adminYield')
<form action="{{ route('product.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
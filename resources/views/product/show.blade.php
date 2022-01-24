@extends('admin')

@section('adminYield')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ '$'.$product->price }}</h6>
      <a href="#" class="card-link">Add to cart</a>
      <a href="#" class="card-link">Buy</a>
    </div>
</div>
@endsection
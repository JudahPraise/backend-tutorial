@extends('admin')

@section('adminYield')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
            <tr>
                <th scope="col">{{ $product->id }}</th>
                <td scope="col">{{ $product->name }}</td>
                <td scope="col">{{ $product->price }}</td>
                <td scope="col">
                    <a class="btn btn-info" href="{{ route('product.show', $product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('product.edit', $product->id) }}">Edit</a>
                    <a class="btn btn-danger" onclick="document.getElementById('deleteProduct').submit()">Delete</a>
                    <form action="{{ route('product.delete',  $product->id) }}" method="POST" id="deleteProduct">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>
                    <p>No data</p>
                </td>
            </tr>
        @endforelse
    </tbody>
  </table>
@endsection
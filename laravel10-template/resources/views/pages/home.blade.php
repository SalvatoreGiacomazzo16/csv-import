@extends('layouts.app')
@section("title", "Homepage")
@section("main-content")

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Barcode</th>
            <th scope="col">Brand</th>
            <th scope="col">Category</th>
            <th scope="col">Weight</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->barcode }}</td>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->weight }}</td>
            <td>{{ $product->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $products->links() }}

@endsection

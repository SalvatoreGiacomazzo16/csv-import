@extends('layouts.app')
@section("title", "homepage")
@section("main-content")

@foreach($products as $product)
{{ $product->id }}
{{$product->name}}
@endforeach
@endsection

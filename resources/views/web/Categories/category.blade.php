@extends('layouts.main')
@section('title')
  {{ $category->__('title') }}
@endsection

@section('content')
<div class="container">
  <div class="starter-template">
    <h1>
        {{ $category->__('title') }}
    </h1>
  <p>
    {{ $category->__('description') }}
  </p>
    @include('web.home.product', ['products' => $category->products])
  </div>
</div>
@endsection
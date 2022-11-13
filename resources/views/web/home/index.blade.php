@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div class="container">
  <div class="starter-template">
  <h1>@lang('main.all_products')</h1>
 @include('web.home.filter')
  @include('web.home.product',['products' => $products])
  <nav>
      <ul class="pagination">
          {{ $products->links() }} 
      </ul>
  </nav>

  </div>
</div>
@endsection
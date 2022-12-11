@extends('layouts.main')
@section('title', __('cart.title'))
@section('content')
<div class="container">
  <div class="starter-template">
    @include('layouts.succes')
  <p> 
    <h1>@lang('cart.title_order')</h1>
  </p>
  <div class="panel">
    <table class="table table-striped">
      <thead>
      <tr>
        <th>@lang('cart.name_product')</th>
        <th>@lang('cart.count')</th>
        <th>@lang('cart.product_price')</th>
        <th>@lang('cart.count_price')</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($order->products as $product )
      
        <tr>
          <td>
            <a href="{{ route('showProduct', $product->slug) }}">
              <img height="56px" src="{{ $product->getImage() }}">
              {{ $product->__('title') }}
            </a>
          </td>
          <td>              
            <div class="btn-group form-inline">

              <form action="{{ route('cart_remove', $product) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">
                  <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                </button>                                                    
              </form>

              <span class="badge">{{ $product->pivot->count }}</span>

              <form action="{{ route('cart_add', $product) }}" method="POST">
                @csrf
                  <button type="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  </button>                                                    
              </form>
            </div>
          </td>
            <td>{{ $product->price }} lei</td>
            <td>{{ $product->getPriceForCount() }} lei</td>
          </tr>
             
      @endforeach
      <tr>
        <td colspan="3">@lang('cart.total_price')</td>
        <td>{{ $order->totalPrice() }} lei</td>
      </tr> 

    </tbody>
        
    </table>
      <br>
    <div class="btn-group pull-right" role="group">
      <a type="button" class="btn btn-success" href="{{ route('confirmOrderView') }}">
        @lang('cart.total_price')
      </a>
    </div>
  </div>
  </div>
</div>
@endsection
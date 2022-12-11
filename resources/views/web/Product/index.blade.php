@extends('layouts.main')
@section('title')
  {{ $product->title }}
@endsection

@section('content')
<div class="container">
  <div class="starter-template">
    <h1>{{ $product->__('title') }}</h1>
    <h2>{{ $product->category->__('title') }}</h2>
    <p>Preț: <b>{{ $product->price }}</b></p>
    <img src="{{ $product->getImage() }}">

    {!! $product->__('content') !!}
   
    <br>
    <span>Сообщить мне, когда товар появится в наличии:</span>
    <div class="warning">

    </div>
      <form method="POST" action="#">
                  
          <input type="text" name="email">
          <button type="submit">Отправить</button>
      </form>
  </div>
</div>

@endsection
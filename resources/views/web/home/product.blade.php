<div class="row">
  @foreach ($products as $product )
  <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
          <div class="labels">  
          </div>
          <img src="{{ $product->getImage() }}" alt="{{ $product->title }}">
          <div class="caption">
              <h3>{{ $product->__('title') }}</h3>
              <p>{{ $product->price }}</p>
              <p>
                  <form action="{{ route('cart_add', $product) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary" role="button">
                      В корзину
                    </button> 
                    <a href="{{ route('showProduct', $product->slug) }}" class="btn btn-default" role="button">Подробнее</a>   
                  </form> 
              </p>
          </div>
      </div>
  </div>
  @endforeach

    
</div>
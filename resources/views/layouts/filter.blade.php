<form method="GET" action="http://internet-shop.tmweb.ru">
  <div class="filters row">
      <div class="col-sm-6 col-md-3">
          <label for="price_from">Цена от
            <input type="text" name="price_from" id="price_from" size="6" value="">
          </label>
          <label for="price_to">до                    
            <input type="text" name="price_to" id="price_to" size="6"  value="">
          </label>
      </div>

      @foreach ($tags as $tag )
      <div class="col-sm-2 col-md-2">
        <label for="hit">
          <input type="checkbox" name="hit" id="hit" > {{ $tag->title }}               
        </label>
      </div> 
      @endforeach
     
      <div class="col-sm-6 col-md-3">
        <button type="submit" class="btn btn-primary">Фильтр</button>
        <a href="http://internet-shop.tmweb.ru" class="btn btn-warning">Сброс</a>
      </div>
  </div>
</form>